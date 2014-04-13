<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanNasional extends CI_Controller {

   public function index()
  {

    $data['body'] = 'home';
    // untuk me-load halaman di view
    $this->load->view('header',$data);

  }

  public function show($index){
    $this->load->model('Taman_Nasional_Model');
    $data = $this->Taman_Nasional_Model->getDataTaman($index);
    $this->load->view('taman_nasional',$data);
    $this->load->view('header');
  }

  public function newTamanNasional(){

  }

  public function cari($kriteria, $keyword){
    $this->load->model('Taman_Nasional_Model');
    $result = array();
    if($kriteria == 'nama'){
      $result = $this->Taman_Nasional_Model->grabTamanByName($keyword);
    }else if($kriteria == 'waktu'){
      $result = $this->Taman_Nasional_Model->grabTamanByTime($keyword);
    }else if($kriteria == 'aktivitas'){
      $result = $this->Taman_Nasional_Model->grabTamanByActivity($keyword);
    }else if($kriteria == 'provinsi'){
      $result = $this->Taman_Nasional_Model->grabTamanByProvince($keyword);
    }
  }

  public function addFoto($idTaman, $idFoto){

  }

  public function deleteFoto($idFoto){

  }

  public function addPenginapan($idTaman, $idPenginapan){

  }

  public function deletePenginapan($idPenginapan){

  }

  public function deleteTamanNasional($idTaman){

  }

  public function getRecommendation(){

  }

  public function shareDetail($taman){

  }

  public function getAllFoto($idTaman){

  }

  public function showNotification($message){

  }
}
