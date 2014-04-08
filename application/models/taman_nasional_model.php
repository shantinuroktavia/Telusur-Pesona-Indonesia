<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taman_Nasional_Model extends CI_Model {

  private var idTaman = 0;
  private var nama = '';
  private var provinsi = '';
  private var profil = '';
  private var akses = '';
  private var nomorKontak = '';
  private var htm = 0;
  private var tips = '';
  private var foto = [];
  private var penginapan = [];

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getDataTaman(int idtaman){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM TamanNasional WHERE id='.$idtaman);

    return $query;
  }

  public function getDataPenginapan(int idpenginapan){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM Penginapan WHERE id='.$idpenginapan);

    return $query;
  }

  public function getFotoTaman(int idfoto){
    $this->load->database();

    $query = $this->db->query('SELECT * FROM Penginapan WHERE id='.$idfoto);

    return $query;
  }

}
