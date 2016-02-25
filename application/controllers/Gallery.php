<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model(array('gallery_model'));
    $this->load->library(array('ion_auth','form_validation', 'session'));
    $this->load->helper(array('url','language', 'url_helper'));

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
  }

  private function authorized() {
    return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
  }

  public function index()	{
    if($this->authorized()){
      // Code to list galleries
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function create(){
    if($this->authorized()){
      // Code to list galleries
      $this->load->library('upload');
      $this->form_validation->set_rules('input_gallery_image', "Please Select Images", 'required');
      if ($this->form_validation->run() == true){
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++) {
          $_FILES['userfile']['name']= $files['userfile']['name'][$i];
          $_FILES['userfile']['type']= $files['userfile']['type'][$i];
          $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
          $_FILES['userfile']['error']= $files['userfile']['error'][$i];
          $_FILES['userfile']['size']= $files['userfile']['size'][$i];

          $this->upload->initialize($this->set_upload_options());
          $this->upload->do_upload();

          // redirect to edit and refine recently uploaded images of gallery

        }
      } else {
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
        $this->data['GALLERY_UPLOAD_PATH'] = GALLERY_UPLOAD_PATH;

        $this->data['input_gallery_image'] = array(
          'name'  => 'input_gallery_image',
          'id'    => 'input-gallery-image',
          'type'  => 'file',
          'class'  => 'form-control',
          'required' => 'required',
          'multiple' => ''
        );
        $this->load->view('admin/gallery/create', $this->data);
      }
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }
  private function set_upload_options()  {
    //upload an image options
    $config = array();
    $config['upload_path'] = GALLERY_UPLOAD_PATH;
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
  }
}
?>
