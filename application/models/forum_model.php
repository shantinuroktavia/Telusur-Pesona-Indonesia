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

}

