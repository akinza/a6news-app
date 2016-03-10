<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->model(array('gallery_model'));
	}

	public function index()	{
		$data = array();
		$data['galleries'] = $this->gallery_model->get_latest_galleries();
		$this->load->view('pages/home', $data);
	}

	public function view($page = 'home') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter
		if($page == 'home'){
			// Fetch Latest few Image Galleries, Say Limit 10
			$data['galleries'] = $this->gallery_model->get_latest_galleries();
		}
    $this->load->view('pages/'.$page, $data);
	}
}
