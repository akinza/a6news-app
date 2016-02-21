<?php
class Category_model extends CI_Model {
  //
  // public $category_id;
  // public $category_name;
  // public $description;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function add_category($cat_name, $cat_desc){
    $this->db->insert('category', array('category_name' => $cat_name, 'description' => $cat_desc));
  }

  public function get_all_categories(){
    $query = $this->db->get('category');
    return $query->result();
  }
  public function get_category($category_id){
    // $q = $this->db->get_where('category', array('category_id', $category_id));
    $q = $this->db->query("SELECT * FROM category WHERE category_id='".$category_id."'");
    return $q->row_array();
  }

  public function delete_category($category_id){
    // $this->db->delete('category', array('category_id', $category_id));
    $this->db->query("DELETE FROM category WHERE category_id='".$category_id."'");
  }

  public function update_category($category_id, $cat_name, $cat_desc){
    $data = array(
      'category_name' => $cat_name,
      'description' => $cat_desc
    );
    $this->db->update('category', $data, array('category_id' => $category_id));
  }
}
?>
