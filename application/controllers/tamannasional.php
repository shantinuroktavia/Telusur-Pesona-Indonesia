<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanNasional extends CI_Controller {

  public function index()
  {
    $this->show(1);
  }

  public function show(int index){
    $this->load->model('Taman_Nasional_Model');
    $data = $this->Taman_Nasional_Model->getDataTaman($index);

    $this->load->view('taman_nasional',$data);
  }

  public function newTamanNasional(){

  }

  public function cari(int kriteria, string keyword){

  }

  public function addFoto(int idTaman, int idFoto){

  }

  public function deleteFoto(int idFoto){

  }

  public function addPenginapan(int idTaman, int idPenginapan){

  }

  public function deletePenginapan(int idPenginapan){

  }

  public function deleteTamanNasional(int idTaman){

  }

  public function getRecommendation(){

  }

  public function shareDetail(int taman){

  }

  public function getAllFoto(int idTaman){

  }

  public function showNotification(string message){

  }
}
