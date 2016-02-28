<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model(array('news_model', 'category_model'));
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
			$data['posts'] = $this->news_model->get_all_posts();
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
				$category = $this->input->post('news_category');
				$news_short = $this->input->post('article_short');
				$news_full = $this->input->post('article_full');
				$author = $this->ion_auth->user()->row()->user_id;

				$dt = new DateTime();
		    $create_date = $dt->format('Y-m-d H:i:s');

				$category_id = $this->input->post('news_category');
				$post_id =  $this->news_model->insert_post($title, $slug, $news_short, $news_full, $create_date, NULL, $author,$category_id);
				// Image Upload
				$files = $_FILES;
				$cpt = count($_FILES['userfile']['name']);
        $this->data['post_id'] = $post_id;
        $this->data['total_images'] = $cpt;

        $images = "";

        for($i=0; $i<$cpt; $i++) {
          $filename = explode(".", $files['userfile']['name'][$i]);
          $ext = $filename[count($filename) - 1];
          // $_FILES['userfile']['name']= $files['userfile']['name'][$i];
          $_FILES['userfile']['name']= "news_".$post_id."_".$i.".".$ext;
          $_FILES['userfile']['type']= $files['userfile']['type'][$i];
          $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
          $_FILES['userfile']['error']= $files['userfile']['error'][$i];
          $_FILES['userfile']['size']= $files['userfile']['size'][$i];

          $this->load->library('upload', $this->set_upload_options());
          $this->upload->initialize($this->set_upload_options());
          // $this->upload->do_upload();
          if ( ! $this->upload->do_upload())	{
      			$error = array('error' => $this->upload->display_errors());
            // echo "<pre>";
            // print_r($error);
            // echo "</pre>";
            $this->data['message'] = "Could Not Upload Image";
      			// $this->load->view('admin/gallery/upload_error');
      		}
      		else	{
      			$data = array('upload_data' => $this->upload->data());
            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";
            if($i !== 0){
              $images = $images. ",";
            }
            $images = $images = $images. $data['upload_data']['file_name'];
      			// $this->load->view('admin/gallery/upload_success');
      		}
        }
				// Ends Image Uploads
				$this->news_model->update_post_images(array('images' => $images ), $post_id);
				redirect(base_url('article'), 'refresh');
			}
			else{
				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				$this->data["categories"] = $this->category_model->get_all_categories();
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

				$this->data['userfile'] = array(
					'name'  => 'userfile[]',
					'id'    => 'input-images',
					'type'  => 'file',
					'class'  => 'form-control',
					'multiple' => 'true',
					'accepts' => 'image/*',
					'required' => 'required'
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
			redirect(base_url('article'), 'refresh');
		}
		else{
			$this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}

	public function delete($news_id)	{
		if($this->authorized()){
			$this->news_model->delete_post($news_id);
			$this->data['message'] = "Post deleted successfully.";
			redirect(base_url('article'), 'refresh');
		}
		else{
			$this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}

	public function create_category()	{
		if($this->authorized()){
			$this->form_validation->set_rules('news_category_name', "Category Name is required.", 'required');

			if ($this->form_validation->run() == true) {
				$cat_name = $this->input->post('news_category_name');
				$cat_desc = $this->input->post('news_category_desc');

				$this->category_model->add_category($cat_name, $cat_desc);
				$this->data["categories"] = $this->category_model->get_all_categories();
				$this->data['message'] = "<p class='alert alert-success'>Category created successfully</p>";
				$this->load->view('admin/category/manage_category', $this->data);
			}
			else{
				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				$this->data["categories"] = $this->category_model->get_all_categories();
				$this->load->view('admin/category/add_category', $this->data);
			}
		}
		else{
			$this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}

	public function manage_category(){
		$this->data["categories"] = $this->category_model->get_all_categories();
		$this->load->view('admin/category/manage_category', $this->data);
	}

	public function delete_category($category_id){
		if($this->authorized()){
			$this->category_model->delete_category($category_id);
			redirect(base_url('article/manage_category'), 'refresh');
		}
		else{
			$this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}
	public function edit_category($category_id){
		if($this->authorized()){
			$this->form_validation->set_rules('news_category_name', "Category Name is required.", 'required');

			if ($this->form_validation->run() == true) {
				$cat_name = $this->input->post('news_category_name');
				$cat_desc = $this->input->post('news_category_desc');

				$this->category_model->update_category($category_id, $cat_name, $cat_desc);

				$this->data["categories"] = $this->category_model->get_all_categories();

				$this->data['message'] = "<p class='alert alert-success'>Category updated successfully</p>";
				$this->load->view('admin/category/manage_category', $this->data);
			}
			else{
				// set the flash data error message if there is one
				$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
				$categories = $this->category_model->get_all_categories();

				$category_data = $this->category_model->get_category($category_id);
				print_r($category_data);

				// $category_data = array();
				// foreach ($categories as $cat) {
				// 	if($cat->category_id == $category_id){
				// 		$category_data = $cat;
				// 	}
				// }
				$this->data['category_id'] = $category_id;
				$this->data["category_name"] = array(
					'name' => 'news_category_name',
					'type' => 'text',
					'class' => 'form-control',
					'id' => 'input-category-name',
					'placeholder' => 'Category Name',
					'value' => $category_data['category_name']
				);

				$this->data["category_desc"] = array(
					'name' => 'news_category_desc',
					'type' => 'text',
					'class' => 'form-control',
					'id' => 'input-category-desc',
					'placeholder' => 'Description',
					'value' => $category_data['description']
				);
				$this->load->view('admin/category/edit_category', $this->data);
			}
		}
		else{
			$this->session->set_flashdata('message', "Sorry! You are not authorized to perform the task.");
			redirect(base_url('auth/login'), 'refresh');
		}
	}
	private function set_upload_options()  {
		//upload an image options
		$config = array();
		$config['upload_path'] = "./assets/uploads/";
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']      = '204800000';
		// $config['max_width'] = '1920';
		// $config['max_height'] = '1280';
		$config['overwrite']     = TRUE;

		return $config;
	}
}
