<?php
class Gallery_model extends CI_Model {
  //
  // public $category_id;
  // public $category_name;
  // public $description;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function index(){

  }
}
?>
