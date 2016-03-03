<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('news_model');
		$this->load->model('category_model');
		$this->load->library(array('ion_auth','form_validation', 'session'));
		$this->load->helper(array('url','language','url_helper'));
		$this->lang->load('admin');
	}

	private function authorized() {
		return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
	}

	public function index()	{
		$data['news'] = $this->news_model->get_news();
		$data['title'] = ucfirst("news");
		$categories = $this->category_model->get_all_categories();
		$data["categories"] = $categories;
		foreach ($categories as $category) {
			$data['all_news'][$category->category_name] = $this->news_model->get_news_categorised($category->category_id);
		}
		// 
		// echo "<pre>";
		// print_r($data['all_news']) ;
		// echo "</pre>";
		$this->load->view('news/index', $data);
	}

	public function view($slug){
		$news = $this->news_model->get_news($slug);
		$data['news'] = $news;
		$data['title'] = ucfirst($slug);
		if($slug == FALSE){
			$this->load->view('news/index', $data);
		}
		else{
			$this->load->view('news/full_news', $data);
		}
	}
}
