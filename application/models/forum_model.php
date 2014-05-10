<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getAllThreads(){
    $this->load->database();
    $query = $this->db->query('SELECT * FROM thread');
    return $query->result_array();
  }

  public function getAllPosts($idthread){
    $this->load->database();
    $query = $this->db->query('SELECT * FROM post WHERE idthread='.$idthread.' ORDER BY WaktuPost ASC');
    return $query->result_array();
  }

  public function getFirstPost($idthread){
    $this->load->database();
    $query = $this->db->query('SELECT * FROM post WHERE idthread='.$idthread.' ORDER BY WaktuPost ASC LIMIT 1');
    return $query->row_array();
  }

  public function getLastPost($idthread){
    $this->load->database();
    $query = $this->db->query('SELECT * FROM post WHERE idthread='.$idthread.' ORDER BY WaktuPost DESC LIMIT 1');
    return $query->row_array();
  }

  public function getPost($idpost){
    $this->load->database();
    $query = $this->db->query('SELECT * FROM post WHERE idpost='.$idpost);
    return $query->row_array();
  }

  public function getJumlahPost($idthread){
    $this->load->database();
    $query = $this->db->query('SELECT count(IdPost) AS Jumlah FROM post WHERE idthread='.$this->db->escape($idthread));
    $r = $query->row_array();
    return $r['Jumlah'];
  }

  public function makeNewPost($data){
    $this->load->database();
    $ins = array(
    'IdThread' => $data['IdThread'],
    'Isi' => $data['isi'],
    'IdPenulis' => $data['userId']
    );
    $this->db->query($this->db->insert_string('post',$ins));
    return ($this->db->affected_rows()==1);
  }

  public function makeNewThread($data){
    $success = false;
    $this->load->database();
    $this->db->trans_start();
    $query = $this->db->query('INSERT INTO thread (JudulThread) VALUES ('.$this->db->escape($data['judul']).')');
    if ($this->db->affected_rows()==1) {
      $query = $this->db->query('SELECT IdThread,JudulThread FROM thread ORDER BY IdThread DESC');
      $r = $query->row_array();
      if($r['JudulThread']==$data['judul']){
        $data['IdThread'] = $r['IdThread'];
        $success = $this->makeNewPost($data);
      }
    }
    $this->db->trans_complete();
    return $success;
  }
}

