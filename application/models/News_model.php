<?php
class News_model extends CI_Model {

  public $id;
  public $slug;
  public $title;
  public $news_short;
  public $news_full;
  public $created;
  public $modified;
  public $author;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get_news($slug = FALSE) {
    if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
    }
    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  public function get_all_posts(){
    $query = $this->db->get('news');
    return $query->result();
  }

  public function insert_post($title, $slug, $news_short, $news_full, $created, $modified=NULL, $author, $category_id){
    $this->title = $title;
    $this->slug = $slug;
    $this->news_short = $news_short;
    $this->news_full = $news_full;
    $this->created = $created;
    $this->modified = $modified;
    $this->author = $author;

    $this->db->insert('news', $this);
    $id = $this->db->insert_id();
    $this->db->insert('news_category', array('news_id' => $id, 'category_id'=> $category_id));
  }

  public function update_post() {
    $this->title = $_POST['title'];
    $this->body = $_POST['body'];
    $this->created = $_POST['created'];
    $this->modified = $_POST['modified'];
    $this->author = $_POST['author'];

    $this->db->update('news', $this, array('id' => $_POST['id']));
  }

  // public function add_category($cat_name, $cat_desc){
  //   $this->db->insert('category', array('category_name' => $cat_name, 'description' => $cat_desc));
  // }
  //
  // public function get_all_categories(){
  //   $query = $this->db->get('category');
  //   return $query->result();
  // }
  // public function get_category($category_id){
  //   $query = $this->db->get_where('category', array('category_id', $category_id));
  //   return $query->row_array();
  // }
  // public function update_category($category_id, $cat_name, $cat_desc){
  //   $this->db->update('category', $this, array('id' => $_POST['id']));
  // }
}
?>
