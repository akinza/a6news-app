<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation', 'session'));
		$this->load->helper(array('url','language','url_helper'));
		$this->lang->load('admin');
	}

	private function authorized() {
		return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
	}

	public function index()	{
		$this->load->view('home');
	}

	public function business()	{
		$this->load->view('news/business');
	}
	public function international()	{
		$this->load->view('news/international');
	}
	public function national()	{
		$this->load->view('news/national');
	}
	public function social()	{
		$this->load->view('news/social');
	}
	public function sports()	{
		$this->load->view('news/sports');
	}
	public function tech()	{
		$this->load->view('news/tech');
	}


	public function create_news(){
		if($this->authorized()){
			
		}
		else{
			redirect(base_url('auth/login'), 'refresh');
		}
	}
}
