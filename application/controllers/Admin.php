<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('role_model');
		$this->load->model('post_model');
		$this->load->helper('url_helper');
	}

	private function authorized() {
		return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
	}

	public function index()	{
		if($this->authorized()){
			$this->load->view('admin/home');
		}
		else{
			redirect(base_url('auth/login'), 'refresh');
		}
	}

	// public function users($action)	{
	// 	if($this->authorized()){
	// 		$data['sub_view'] = "";
	// 		if($action === "list"){
	// 			$data['users'] = $this->user_model->get_all_users();
	// 			$data['roles'] = $this->role_model->get_all_roles();
	//
	// 			$data['sub_view'] = "admin/user/list_user";
	// 			redirect(base_url('auth/'), 'refresh');
	// 		}
	// 		else if($action === 'add'){
	// 			$data['sub_view'] = "admin/user/add_user";
	// 		}
	// 		else if($action === 'update') {
	// 			$data['sub_view'] = "admin/user/update_user";
	// 		}
	// 		$this->load->view('admin/home', $data);
	// 	}
	// 	else{
	// 		redirect(base_url('auth/login'), 'refresh');
	// 	}
	//
	// }

	// public function roles($action)	{
	// 	if($this->authorized()){
	// 		$data['sub_view'] = "";
	// 		if($action === "list"){
	// 			$data['roles'] = $this->role_model->get_all_roles();
	// 			$data['sub_view'] = "admin/role/list_role";
	// 		}
	// 		else if($action === 'add'){
	// 			$data['sub_view'] = "admin/role/add_role";
	// 		}
	// 		else if($action === 'update') {
	// 			$data['sub_view'] = "admin/role/update_role";
	// 		}
	// 		$this->load->view('admin/home', $data);
	// 	}
	// 	else{
	// 		redirect(base_url('auth/login'), 'refresh');
	// 	}
	//
	//
	// }

	public function posts($action)	{
		if($this->authorized()){
			$data['sub_view'] = "";
			if($action === "list"){
				$data['users'] = $this->user_model->get_all_users();
				$data['posts'] = $this->post_model->get_all_posts();
				// $data['sub_view'] = "admin/post/list_post";
				$this->load->view('admin/post/list_post', $data);
			}
			else if($action === 'add'){
				// $data['sub_view'] = "admin/post/add_post";
				$this->load->view('admin/post/add_post', $data);
			}
			else if($action === 'update') {
				// $data['sub_view'] = "admin/post/update_post";
				$this->load->view('admin/post/update_post', $data);
			}
		}
		else{
			redirect(base_url('auth/login'), 'refresh');
		}
	}

}
