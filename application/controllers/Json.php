<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Json extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model(array('gallery_model', 'news_model', 'category_model'));
	}

	public function index()	{
		$data = array();
		$data["status"] = "OK";
		$data["message"] = "Expecting Endpoint to serve data";
		echo json_encode($data);
	}

	public function headlines(){
		$data = array();
		if(!isset($_GET["category"])){
			$data['status'] = "error";
			$data['message'] = "No Category ID specified.";
		}else{
			$category_id = $_GET["category"];
			$limit = isset($_GET["limit"]) ? $_GET["limit"] : 4;
			$data['headlines'] = $this->news_model->get_categorized_news_headlines($category_id, $limit);
		}
		echo json_encode($data);
	}
}
