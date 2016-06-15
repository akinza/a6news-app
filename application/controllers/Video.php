<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Video extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model(array( 'ad_model', 'video_model'));
    $this->load->library(array('ion_auth','form_validation', 'session', ));
    $this->load->helper(array('url','language', 'url_helper', 'form'));

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
  }

  private function authorized() {
    return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
  }

  public function index()	{
    // View all videos
    $data['type'] = 'all';
    $data['video_infos'] = $this->video_model->get_videos();
    $data['ads_infos'] = $this->ad_model->get_ads();
    $this->load->view('video/index', $data);
  }
  public function manage()	{
    if($this->ion_auth->logged_in()){
      // Code to list videos
      $data['videos'] = $this->video_model->get_videos();
      $this->load->view('admin/video/manage', $data);
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function create(){
    if($this->ion_auth->logged_in()){
      // Code to list videos
      $this->form_validation->set_rules('video_name', "Please enter valid video name", 'required');
      $this->form_validation->set_rules('video_description', "Please enter video description", 'required');
      $this->form_validation->set_rules('video_link', "Please enter Video Link", 'required');

      if ($this->form_validation->run()){
        // echo "<pre>";
        // print_r($files);
        // echo "</pre>";
        //
        // Inserting Gallery Details into database
        $video_id = $this->video_model->insert_video();
        $this->data['video_id'] = $video_id;

        $this->data['video_info'] = $this->video_model->get_video($video_id);
        $this->load->view('admin/video/upload_success', $this->data);
      } else {
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        $this->data['video_name'] =  array(
          'name' => 'video_name',
          'id' => 'video-name',
          'class' => 'form-control',
          'type' => 'text',
          'required' => 'required',
          'autofocus' => 'true'
        );
        $this->data['video_description'] =  array(
          'name' => 'video_description',
          'id' => 'video-desc',
          'class' => 'form-control',
          'type' => 'text',
          'required' => 'required'
        );
        $this->data['video_link'] = array(
          'name'  => 'video_link',
          'id'    => 'video-link',
          'type'  => 'text',
          'class'  => '',
          'required' => 'required',
          'placeholder' => 'video-id'
        );
        $this->load->view('admin/video/create', $this->data);
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

  public function delete($video_id){
    if($this->authorized()){
      $this->video_model->delete($video_id);
      // TODO : Delete Corresponding Images as well

      redirect(base_url('video/manage'), 'refresh');
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function view($video_id = FALSE){
    $data = array();
    if($video_id === FALSE){
      // View all videos
      $data['type'] = 'all';
      $data['video_infos'] = $this->video_model->get_videos();
          $data['ads_infos'] = $this->ad_model->get_ads();
      $this->load->view('gallery/index', $data);
    }
    else {
      // View Single Gallery
      $data['type'] = 'single';
      $data['video_info'] = $this->video_model->get_video($video_id);
                $data['ads_infos'] = $this->ad_model->get_ads();
      $this->load->view('gallery/view', $data);
    }
  }

  // Ajax Call handler
  public function get_video_info($video_id = FALSE){
    $data = array();
    if($video_id === FALSE) {
      // get all
      echo json_encode($this->video_model->get_videos());
    }
    else {
      // get specific gallery
      echo json_encode ($this->video_model->get_video($video_id));
    }
  }
}
?>
