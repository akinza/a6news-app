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

  public function insert_post($title, $slug, $news_short, $news_full, $created, $modified=NULL, $author){
    $this->title = $title;
    $this->slug = $slug;
    $this->news_short = $news_short;
    $this->news_full = $news_full;
    $this->created = $created;
    $this->modified = $modified;
    $this->author = $author;

    $this->db->insert('news', $this);
  }

  public function update_post() {
    $this->title = $_POST['title'];
    $this->body = $_POST['body'];
    $this->created = $_POST['created'];
    $this->modified = $_POST['modified'];
    $this->author = $_POST['author'];

    $this->db->update('news', $this, array('id' => $_POST['id']));
  }

}
?>
