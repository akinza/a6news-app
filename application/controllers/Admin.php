<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation', 'session'));
		$this->load->helper(array('url','language', 'url_helper'));

		$this->form_validation->set_error_delimiters(
			$this->config->item('error_start_delimiter', 'ion_auth'),
			$this->config->item('error_end_delimiter', 'ion_auth')
		);

		$this->lang->load('admin');
	}

	private function authorized() {
		return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
	}

	public function index()	{
		if($this->ion_auth->logged_in()){
			// $this->load->view('admin/home');
			redirect(base_url('article'), 'refresh');
		}
		else{
			redirect(base_url('auth/login'), 'refresh');
		}
	}
}
