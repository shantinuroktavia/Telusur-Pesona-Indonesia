<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanNasionalController extends CI_Controller {

  public function index()
  {
    // $this->load->model('Taman_Nasional_Model');

    load_view('HomeUI',array());
  }

  public function show($index){

    $this->load->model('Taman_Nasional_Model');
    $data['tamannasional'] = $this->Taman_Nasional_Model->getDataTaman($index);
    $data['daftarpenginapan'] = $this->getAllPenginapan($index);
    $logged = $this->session->userdata('idAnggotaTLPI');
    if($logged)
    load_view('tamannasional_anggota',$data);
    else load_view('tamannasional',$data);
  }

  public function newTamanNasional(){

  }

  // public function cari($kriteria, $keyword){
    // $this->load->model('Taman_Nasional_Model');
    // $result = array();
    // if($kriteria == 'nama'){
      // $result = $this->Taman_Nasional_Model->grabTamanByName($keyword);
    // }else if($kriteria == 'waktu'){
      // $result = $this->Taman_Nasional_Model->grabTamanByTime($keyword);
    // }else if($kriteria == 'aktivitas'){
      // $result = $this->Taman_Nasional_Model->grabTamanByActivity($keyword);
    // }else if($kriteria == 'provinsi'){
      // $result = $this->Taman_Nasional_Model->grabTamanByProvince($keyword);
    // }
    // $this->load->view('cari',$result);
  // }

  public function unggahFoto(){
    $success = false;
    if(!empty($_POST)){
      $postdata = $this->input->post();

      $config['upload_path'] = './fotopublik/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png';
      $config['max_size']    = '2048';
      $config['max_width']  = '0';
      $config['max_height']  = '0';
      $config['encrypt_name'] = true;

      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('fotopublik'))
      {
        $error = array('error' => $this->upload->display_errors());

        // uploading failed. $error will holds the errors.

      }
      else
      {
        $data = array('upload_data' => $this->upload->data());

        // uploading successful, now do your further actions

        $path = $data['upload_data']['file_name'];
        $idTaman = $postdata['idTaman'];

         $this->load->model('Foto_Publik_Model');
        $success = $this->Foto_Publik_Model->addFotoPublik($path,$idTaman);

      }
    }

    $idTaman = $postdata['idTaman'];
    if ($success){
      $errmess['pesan'] = "Upload foto berhasil.";
      $errmess['redirdest'] = 'tamannasional/'.$idTaman;
    }else{
      $errmess['pesan'] = "Upload foto gagal.<br/>".$error['error'];
      $errmess['redirdest'] = 'uploadfoto/'.$idTaman;
    }
    load_view('notifikasi',$errmess);
  }

  public function deleteFoto($idFoto){

  }

  public function addPenginapan($idTaman, $idPenginapan){

  }

  public function deletePenginapan($idPenginapan){

  }

  public function addReview(){
    $success = false;
    if (!empty($_POST)){
      $postdata = $this->input->post();
      $this->load->model('Review_Model');
      $success = $this->Review_Model->addReview($postdata);
      $idTaman = $postdata['idTaman'];
    }
    if ($success){
      $errmess['pesan'] = "Upload foto berhasil.";
      $errmess['redirdest'] = 'tamannasional/'.$idTaman;
    }else{
      $errmess['pesan'] = "Pengiriman review gagal.";
      $errmess['redirdest'] = 'reviewForm';
    }
    load_view('notifikasi',$errmess);
  }

  public function deleteTamanNasional($idTaman){

  }

  public function getRecommendation(){

  }

  public function shareDetail($taman){

  }

  public function getAllPenginapan($idTaman){
    $this->load->model('Penginapan_Model');

    return $this->Penginapan_Model->getAllPenginapan($idTaman);
  }

  public function getAllFoto($idTaman){

  }

  public function showUploadFotoForm($idTaman){
    $data['idTaman'] = $idTaman;
    load_view('uploadfoto',$data);
  }

  public function loadDatabase(){
    $this->load->helper('file');
    $this->load->helper('url');
    $this->load->database();
    $this->load->dbforge();
    $folder_name = 'databasesql';
    $path = base_url('/');

    $file_restore = $this->load->file($path . $folder_name . '/tlpi1.sql', true);
    $file_array = explode(';', $file_restore);
    foreach ($file_array as $query)
    {
      $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
      $this->db->query($query);
      $this->db->query("SET FOREIGN_KEY_CHECKS = 1");
    }
    $this->load->view('headerUmum');
  }

  public function formUpdateInformasi(){
    load_view('updateInformasi',array());
  }
}
