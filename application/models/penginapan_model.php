<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Penginapan_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getAllPenginapan($idTaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM Penginapan WHERE IdTaman = '.$this->db->escape($idTaman));

    return $query->result_array();
  }

  }
