<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {
  public $id;
  public $title;
  public $body;
  public $created;
  public $modified;
  public $author;

  public function __construct(){

    parent::__construct();
  }

  public function get_all_posts(){
          $query = $this->db->get('posts');
          return $query->result();
  }

  public function insert_post(){
          $this->title = $_POST['title'];
          $this->body = $_POST['body'];
          $this->created = $_POST['created'];
          $this->modified = $_POST['modified'];
          $this->author = $_POST['author'];

          $this->db->insert('posts', $this);
  }

  public function update_post(){
          $this->title = $_POST['title'];
          $this->body = $_POST['body'];
          $this->created = $_POST['created'];
          $this->modified = $_POST['modified'];
          $this->author = $_POST['author'];

          $this->db->update('posts', $this, array('id' => $_POST['id']));
  }
}
?>
