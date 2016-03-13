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
  public $images;

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
    return $id;
  }

  public function update_post() {
    $this->title = $_POST['title'];
    $this->body = $_POST['body'];
    $this->created = $_POST['created'];
    $this->modified = $_POST['modified'];
    $this->author = $_POST['author'];

    $this->db->update('news', $this, array('id' => $_POST['id']));
  }

  public function update_post_images($data, $id) {
    $this->db->update('news', $data, array('id' => $id));
  }

  public function delete_post($id){
    $this->db->query("DELETE FROM news WHERE id=".$id);
  }

  public function get_news_categorised($category_id){
    $query = $this->db->query("SELECT * FROM news_category as NC, news as N, category as C WHERE NC.category_id = C.category_id AND N.id = NC.news_id AND NC.category_id = ".$category_id. " ORDER BY NC.news_id DESC LIMIT 0,10");
    return $query->result();
  }

  public function update_publishing_state($id, $publish){
    $data = array( 'publish' => $publish );
    $this->db->where('id', $id);
    $this->db->update('news', $data);
  }

  public function get_news_headlines($limit = 3) {
    $query = $this->db->query("SELECT * FROM news_category AS NC, news AS N, category AS C WHERE NC.category_id = C.category_id AND N.id = NC.news_id ORDER BY NC.news_id DESC LIMIT " . $limit);
    // $query = $this->db->query("SELECT * FROM `news` ORDER BY `id` DESC LIMIT " . $limit);
    return $query->result();
  }
}
?>
