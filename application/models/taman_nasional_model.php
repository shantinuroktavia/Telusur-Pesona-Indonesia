<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taman_Nasional_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getDataTaman($idtaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM TamanNasional WHERE IdTN='.$idtaman);

    return $query->row_array();
  }

  public function grabTamanByName($keyword){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM TamanNasional WHERE IdTN LIKE \'%'.$keyword.'%\'');

    return $query->result_array();
  }

  public function grabTamanByWaktu($keyword){
    $this->load->database();

    //$query = $this->db->query('SELECT * FROM TamanNasional WHERE IdTN LIKE \'%'.$keyword.'%\'');

    //return $query->result_array();
  }

  public function getIdPenginapan($idtaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM Penginapan WHERE IdTN='.$idpenginapan);

    return $query->row_array();
  }

  public function getIdFotoTaman($idTaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM Penginapan WHEREIdTN='.$idfoto);

    return $query->row_array();
  }

}
