<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation', 'session'));
		$this->load->helper(array('url','language', 'url_helper'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('article');
	}

	private function authorized() {
		return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
	}

	public function index()	{
		if($this->authorized()){
      $data['news'] = $this->news_model->get_all_posts();
      $this->load->view('admin/post/list_post', $data);
		}
		else{
			redirect(base_url('auth/login'), 'refresh');
		}
	}

	public function create()	{
		if($this->authorized()) {
			$this->form_validation->set_rules('article_title', $this->lang->line('create_group_validation_name_label'), 'required');
			$this->form_validation->set_rules('article_short', $this->lang->line('create_group_validation_name_label'), 'required');
			$this->form_validation->set_rules('article_full', $this->lang->line('create_group_validation_name_label'), 'required');

      if ($this->form_validation->run() == true) {
        $title = $this->input->post('article_title');
				$slug = url_title($this->input->post('article_title'), 'dash', TRUE);
        // $slug = $this->input->post('article_title');
        $news_short = $this->input->post('article_short');
        $news_full = $this->input->post('article_full');
        $author = $this->ion_auth->user()->row()->user_id;
        $create_date = time();

        $this->news_model->insert_post($title, $slug, $news_short, $news_full, $create_date, NULL, $author);

        redirect(base_url('article'), 'refresh');
      }
      else{
        // set the flash data error message if there is one
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        // pass the user to the view
        $this->data['article_title'] = array(
          'name'  => 'article_title',
          'id'    => 'article-title',
          'type'  => 'text',
          'class'  => 'form-control',
          'value' => $this->form_validation->set_value('article_title', $this->news_model->title),
        );
        $this->data['article_short'] = array(
          'name'  => 'article_short',
          'id'    => 'article-short',
          'type'  => 'textarea',
          'class'  => 'form-control',
          'value' => $this->form_validation->set_value('article_short', $this->news_model->news_short),
        );
        $this->data['article_full'] = array(
          'name'  => 'article_full',
          'id'    => 'article-full',
          'type'  => 'textarea',
          'class'  => 'form-control',
          'value' => $this->form_validation->set_value('article_full', $this->news_model->news_full),
        );
        $this->load->view('admin/post/add_post', $this->data);

      }
		}
		else {
      $this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
      redirect(base_url('auth/login'), 'refresh');
		}
	}

	public function edit()	{
		if($this->authorized()){
				$this->load->view('admin/post/update_post', $data);
		}
		else{
      $this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}

	public function delete()	{
		if($this->authorized()){
				$this->load->view('admin/post/update_post', $data);
		}
		else{
      $this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}

}
