<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
  public $uid;
  public $first_name;
  public $last_name;
  public $email_id;
  public $secret;
  public $role_id;

  public function __construct(){
    $this->load->database();
    parent::__construct();
  }

  public function get_all_users(){
          $query = $this->db->get('users');
          return $query->result();
  }

  public function insert_user(){
          $this->first_name = $_POST['first_name'];
          $this->last_name = $_POST['last_name'];
          $this->email_id = $_POST['email_id'];
          $this->secret = $_POST['secret'];
          $this->role_id = $_POST['role_id'];

          $this->db->insert('users', $this);
  }

  public function update_user(){
          $this->first_name = $_POST['first_name'];
          $this->last_name = $_POST['last_name'];
          $this->email_id = $_POST['email_id'];
          $this->secret = $_POST['secret'];
          $this->role_id = $_POST['role_id'];

          $this->db->update('users', $this, array('uid' => $_POST['uid']));
  }
}
?>
