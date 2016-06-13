<?php
class Ad_model extends CI_Model {
  public $ad_id;
  public $ad_name;
  public $description;
  public $author;
  public $created_on;
  public $modified_on;
  public $images;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function insert_ad(){
    $dt = new DateTime();
    $create_date = $dt->format('Y-m-d H:i:s');

    $data = array(
      'ad_name' => $this->input->post('ad_name'),
      'description' => $this->input->post('ad_description'),
      'author' => $this->ion_auth->user()->row()->user_id,
      'created_on' => $create_date
    );
    $this->db->insert('ad', $data);
    return $this->db->insert_id();
  }

  public function update_ad($data, $ad_id){
    $this->db->update('ad', $data, array('ad_id' => $ad_id));
  }

  public function get_ad($ad_id){
    $query = $this->db->query("SELECT * FROM ad WHERE ad_id = ".$ad_id );
    return $query->row();
  }

  public function get_ads(){
    $query = $this->db->query("SELECT * FROM ad WHERE 1");
    return $query->result();
  }

  public function delete($ad_id){
    $this->db->query("DELETE FROM ad WHERE ad_id = ".$ad_id);
  }

  public function get_latest_ads($limit = 4){
    $query = $this->db->query("SELECT * FROM `ad` ORDER BY `ad_id` DESC LIMIT " . $limit);
    return $query->result();
  }
}
?>
