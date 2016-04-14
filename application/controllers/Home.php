<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model(array('gallery_model', 'news_model', 'category_model'));
	}

	public function index()	{
		$data = array();
		$data['galleries'] = $this->gallery_model->get_latest_galleries();
		$data['headlines'] = $this->news_model->get_news_headlines();
		$this->load->view('pages/home', $data);
	}

	public function view($page = 'default') {
		$data['title'] = ucfirst($page) . " &mdash; BharatBhutan" ; // Capitalize the first letter
		$data['galleries'] = $this->gallery_model->get_latest_galleries();
		$data['category'] = $page;
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')) {
      // Whoops, we don't have a page for that!
      // show_404();
			$this->load->view('pages/default', $data);
    } else{
    	$this->load->view('pages/'.$page, $data);
		}
	}
}
