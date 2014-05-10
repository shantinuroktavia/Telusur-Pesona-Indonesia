<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taman_Nasional_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getDataTaman($idtaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM TamanNasional WHERE IdTaman='.$this->db->escape($idtaman));

    $data = $query->row_array();

    return $data;
  }

  public function grabTamanByName($keyword){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM TamanNasional WHERE IdTaman LIKE \'%'.$keyword.'%\'');

    return $query->result_array();
  }

  public function grabTamanByWaktu($keyword){
    $this->load->database();

    //$query = $this->db->query('SELECT * FROM TamanNasional WHERE IdTN LIKE \'%'.$keyword.'%\'');

    //return $query->result_array();
  }
  public function grabTamanByProvince($keyword){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM TamanNasional WHERE Provinsi LIKE \'%'.$keyword.'%\'');

    return $query->result_array();
  }

  public function getIdPenginapan($idtaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM Penginapan WHERE IdTaman='.$idpenginapan);

    return $query->result_array();
  }

  public function getIdFotoTaman($idTaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM FotoTaman WHEREIdTN='.$idfoto);

    return $query->result_array();
  }

}
