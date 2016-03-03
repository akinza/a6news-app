<?php
class Gallery_model extends CI_Model {
  public $gallery_id;
  public $gallery_name;
  public $description;
  public $author;
  public $created_on;
  public $modified_on;
  public $images;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function insert_gallery(){
    $dt = new DateTime();
    $create_date = $dt->format('Y-m-d H:i:s');

    $data = array(
      'gallery_name' => $this->input->post('gallery_name'),
      'description' => $this->input->post('gallery_description'),
      'author' => $this->ion_auth->user()->row()->user_id,
      'created_on' => $create_date
    );
    $this->db->insert('gallery', $data);
    return $this->db->insert_id();
  }

  public function update_gallery($data, $gallery_id){
    $this->db->update('gallery', $data, array('gallery_id' => $gallery_id));
  }

  public function get_gallery($gallery_id){
    $query = $this->db->query("SELECT * FROM gallery WHERE gallery_id = ".$gallery_id );
    return $query->row_array();
  }

  public function get_galleries(){
    $query = $this->db->query("SELECT * FROM gallery WHERE 1");
    return $query->result();
  }

  public function delete($gallery_id){
    $this->db->query("DELETE FROM gallery WHERE gallery_id = ".$gallery_id);
  }
}
?>
