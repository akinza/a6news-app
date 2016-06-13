<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ads extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->model(array('ad_model'));
    $this->load->library(array('ion_auth','form_validation', 'session', ));
    $this->load->helper(array('url','language', 'url_helper', 'form'));

    $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
  }

  private function authorized() {
    return $this->ion_auth->logged_in() && $this->ion_auth->is_admin();
  }

  public function index()	{
    // View all ads
    $data['type'] = 'all';
    $data['ad_infos'] = $this->ad_model->get_ads();
    $this->load->view('ad/index', $data);
  }
  public function manage()	{
    if($this->ion_auth->logged_in()){
      // Code to list ads
      $data['ads'] = $this->ad_model->get_ads();
      $this->load->view('admin/ad/manage', $data);
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function create(){
    if($this->ion_auth->logged_in()){
      // Code to list ads
      $this->form_validation->set_rules('ad_name', "Please enter valid ad name", 'required');
      $this->form_validation->set_rules('ad_description', "Please enter ad description", 'required');

      if ($this->form_validation->run()){
        $files = $_FILES;
        // echo "<pre>";
        // print_r($files);
        // echo "</pre>";
        //
        // Inserting ad Details into database
        $ad_id = $this->ad_model->insert_ad();
        $cpt = count($_FILES['userfile']['name']);
        $this->data['ad_id'] = $ad_id;
        $this->data['total_images'] = $cpt;

        $images = "";

        for($i=0; $i<$cpt; $i++) {
          $filename = explode(".", $files['userfile']['name'][$i]);
          $ext = $filename[count($filename) - 1];
          // $_FILES['userfile']['name']= $files['userfile']['name'][$i];
          $_FILES['userfile']['name']= $ad_id."_".$i.".".$ext;
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
      			$this->load->view('admin/ad/upload_error');
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
      			// $this->load->view('admin/ad/upload_success');
      		}
        }
        $this->ad_model->update_ad(array('images' => $images ), $ad_id);
        $this->data['ad_info'] = $this->ad_model->get_ad($ad_id);
        $this->load->view('admin/ad/upload_success', $this->data);
      } else {
        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

        $this->data['ad_name'] =  array(
          'name' => 'ad_name',
          'id' => 'ad-name',
          'class' => 'form-control',
          'type' => 'text',
          'required' => 'required',
          'autofocus' => 'true'
        );
        $this->data['ad_description'] =  array(
          'name' => 'ad_description',
          'id' => 'ad-desc',
          'class' => 'form-control',
          'type' => 'text',
          'required' => 'required'
        );
        $this->data['input_ad_image'] = array(
          'name'  => 'userfile[]',
          'id'    => 'input-ad-image',
          'type'  => 'file',
          'class'  => 'form-control',
          'required' => 'required',
          'multiple' => ''
        );
        $this->load->view('admin/ad/create', $this->data);
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

  public function delete($ad_id){
    if($this->authorized()){
      $this->ad_model->delete($ad_id);
      // TODO : Delete Corresponding Images as well

      redirect(base_url('ad'), 'refresh');
    }
    else{
      redirect(base_url('auth/login'), 'refresh');
    }
  }

  public function view($ad_id = FALSE){
    $data = array();
    if($ad_id === FALSE){
      // View all ads
      $data['type'] = 'all';
      $data['ad_infos'] = $this->ad_model->get_ads();
      $this->load->view('ad/index', $data);
    }
    else {
      // View Single ad
      $data['type'] = 'single';
      $data['ad_info'] = $this->ad_model->get_ad($ad_id);
      $this->load->view('ad/view', $data);
    }
  }

  // Ajax Call handler
  public function get_ad_info($ad_id = FALSE){
    $data = array();
    if($ad_id === FALSE) {
      // get all
      echo json_encode($this->ad_model->get_ads());
    }
    else {
      // get specific ad
      echo json_encode ($this->ad_model->get_ad($ad_id));
    }
  }
}

?>
