<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanNasional extends CI_Controller {

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  * 		http://example.com/index.php/welcome
  *	- or -
  * 		http://example.com/index.php/welcome/index
  *	- or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see http://codeigniter.com/user_guide/general/urls.html
  */

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
