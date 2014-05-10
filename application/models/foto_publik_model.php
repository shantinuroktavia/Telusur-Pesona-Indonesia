<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foto_Publik_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getAllFoto($idTaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM FotoPublik WHERE IdTaman = '.$this->db->escape($idTaman));

    return $query->result_array();
  }

  public function addFotoPublik($path,$idTaman){
    $this->load->database();

    $query = $this->db->query('INSERT INTO FotoPublik (FilePath,IdTaman) VALUES ('.$this->db->escape($path).','.$this->db->escape($idTaman).')');

    return ($this->db->affected_rows() != 1) ? false : true;
  }

  }
