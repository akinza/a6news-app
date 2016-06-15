<?php
class Video_model extends CI_Model {
  public $video_id;
  public $video_name;
  public $description;
  public $author;
  public $created_on;
  public $modified_on;
  public $video_link;
  public $youtube_video_id;

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function insert_video(){
    $dt = new DateTime();
    $create_date = $dt->format('Y-m-d H:i:s');

    $data = array(
      'video_name' => $this->input->post('video_name'),
      'description' => $this->input->post('video_description'),
      'video_link' => "https://www.youtube.com/embed/".$this->input->post('video_link'),
      'youtube_video_id' => $this->input->post('video_link'),
      'author' => $this->ion_auth->user()->row()->user_id,
      'created_on' => $create_date
    );
    $this->db->insert('video', $data);
    return $this->db->insert_id();
  }

  public function update_video($data, $video_id){
    $this->db->update('video', $data, array('video_id' => $video_id));
  }

  public function get_video($video_id){
    $query = $this->db->query("SELECT * FROM video WHERE video_id = ".$video_id );
    return $query->row();
  }

  public function get_videos(){
    $query = $this->db->query("SELECT * FROM video WHERE 1");
    return $query->result();
  }

  public function delete($video_id){
    $this->db->query("DELETE FROM video WHERE video_id = ".$video_id);
  }

  public function get_latest_videos($limit = 4){
    $query = $this->db->query("SELECT * FROM `video` ORDER BY `video_id` DESC LIMIT " . $limit);
    return $query->result();
  }
}
?>
