<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url_helper');
	}

	public function index()	{
		$this->load->view('admin/home');
	}

	public function users($action)	{
		$data['sub_view'] = "";
		if($action === "list"){
			$data['sub_view'] = "admin/user/list_user";
		}
		else if($action === 'add'){
			$data['sub_view'] = "admin/user/add_user";
		}
		else if($action === 'update') {
			$data['sub_view'] = "admin/user/update_user";
		}
		$this->load->view('admin/home', $data);
	}

	public function roles($action)	{
		$data['sub_view'] = "";
		if($action === "list"){
			$data['sub_view'] = "admin/role/list_role";
		}
		else if($action === 'add'){
			$data['sub_view'] = "admin/role/add_role";
		}
		else if($action === 'update') {
			$data['sub_view'] = "admin/role/update_role";
		}
		$this->load->view('admin/home', $data);

	}

	public function posts($action)	{
		$data['sub_view'] = "";
		if($action === "list"){
			$data['sub_view'] = "admin/post/list_post";
		}
		else if($action === 'add'){
			$data['sub_view'] = "admin/post/add_post";
		}
		else if($action === 'update') {
			$data['sub_view'] = "admin/post/update_post";
		}
		$this->load->view('admin/home', $data);

	}
}
