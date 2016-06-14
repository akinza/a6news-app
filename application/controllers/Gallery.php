<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model(array('gallery_model', 'ad_model'));
    $this->load->library(array('ion_auth','form_validation', 'session', ));
    $this->load->helper(array('url','language', 'url_helper', 'form'));

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
  }

  private function authorized() {
    return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
  }

  public function index()	{
    // View all galleries
    $data['type'] = 'all';
    $data['gallery_infos'] = $this->gallery_model->get_galleries();
    $data['ads_infos'] = $this->ad_model->get_ads();
    $this->load->view('gallery/index', $data);
  }
  public function manage()	{
    if($this->ion_auth->logged_in()){
      // Code to list galleries
      $data['galleries'] = $this->gallery_model->get_galleries();
      $this->load->view('admin/gallery/manage', $data);
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function create(){
    if($this->ion_auth->logged_in()){
      // Code to list galleries
      $this->form_validation->set_rules('gallery_name', "Please enter valid gallery name", 'required');
      $this->form_validation->set_rules('gallery_description', "Please enter gallery description", 'required');

      if ($this->form_validation->run()){
        $files = $_FILES;
        // echo "<pre>";
        // print_r($files);
        // echo "</pre>";
        //
        // Inserting Gallery Details into database
        $gallery_id = $this->gallery_model->insert_gallery();
        $cpt = count($_FILES['userfile']['name']);
        $this->data['gallery_id'] = $gallery_id;
        $this->data['total_images'] = $cpt;

        $images = "";

        for($i=0; $i<$cpt; $i++) {
          $filename = explode(".", $files['userfile']['name'][$i]);
          $ext = $filename[count($filename) - 1];
          // $_FILES['userfile']['name']= $files['userfile']['name'][$i];
          $_FILES['userfile']['name']= $gallery_id."_".$i.".".$ext;
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
      			$this->load->view('admin/gallery/upload_error');
      		}
      		else	{
      			$data = array('upload_data' => $this->upload->data());
            $this->data['image_'.$i] = array();
            $this->data['image_'.$i] = $data;
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
        $this->gallery_model->update_gallery(array('images' => $images ), $gallery_id);
        $this->data['gallery_info'] = $this->gallery_model->get_gallery($gallery_id);
        $this->load->view('admin/gallery/upload_success', $this->data);
      } else {
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        $this->data['gallery_name'] =  array(
          'name' => 'gallery_name',
          'id' => 'gallery-name',
          'class' => 'form-control',
          'type' => 'text',
          'required' => 'required',
          'autofocus' => 'true'
        );
        $this->data['gallery_description'] =  array(
          'name' => 'gallery_description',
          'id' => 'gallery-desc',
          'class' => 'form-control',
          'type' => 'text',
          'required' => 'required'
        );
        $this->data['input_gallery_image'] = array(
          'name'  => 'userfile[]',
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
    $config['upload_path'] = "./assets/uploads/";
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size']      = '204800000';
    // $config['max_width'] = '1920';
    // $config['max_height'] = '1280';
    $config['overwrite']     = TRUE;

    return $config;
  }

  public function delete($gallery_id){
    if($this->authorized()){
      $this->gallery_model->delete($gallery_id);
      // TODO : Delete Corresponding Images as well

      redirect(base_url('gallery'), 'refresh');
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function view($gallery_id = FALSE){
    $data = array();
    if($gallery_id === FALSE){
      // View all galleries
      $data['type'] = 'all';
      $data['gallery_infos'] = $this->gallery_model->get_galleries();
          $data['ads_infos'] = $this->ad_model->get_ads();
      $this->load->view('gallery/index', $data);
    }
    else {
      // View Single Gallery
      $data['type'] = 'single';
      $data['gallery_info'] = $this->gallery_model->get_gallery($gallery_id);
                $data['ads_infos'] = $this->ad_model->get_ads();
      $this->load->view('gallery/view', $data);
    }
  }

  // Ajax Call handler
  public function get_gallery_info($gallery_id = FALSE){
    $data = array();
    if($gallery_id === FALSE) {
      // get all
      echo json_encode($this->gallery_model->get_galleries());
    }
    else {
      // get specific gallery
      echo json_encode ($this->gallery_model->get_gallery($gallery_id));
    }
  }
}
?>
