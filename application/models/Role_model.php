<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role_model extends CI_Model {
  public $role_id;
  public $role_name;

  public function __construct(){

    parent::__construct();
  }

  public function get_all_roles(){
          $query = $this->db->get('roles');
          return $query->result();
  }

  public function insert_user(){
          $this->role_name = $_POST['role_name'];

          $this->db->insert('roles', $this);
  }

  public function update_user(){
          $this->role_name = $_POST['role_name'];

          $this->db->update('roles', $this, array('role_id' => $_POST['role_id']));
  }
}
?>
