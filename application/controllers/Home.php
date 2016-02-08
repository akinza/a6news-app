<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function index()	{
		$this->load->view('pages/home');
	}

	public function view($page = 'home') {
    if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')) {
      // Whoops, we don't have a page for that!
      show_404();
    }
    $data['title'] = ucfirst($page); // Capitalize the first letter
    $this->load->view('pages/'.$page, $data);
	}
}
