<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

  public function index(){

  }

  public function viewAnggota($idAnggota){
    $this->load->model('Anggota_Model');
    $data = $this->Anggota_Model->getDataAnggota($index);

    $this->load->view('anggota',$data);
  }
  
  public function daftarBaru(){
    $data = $this->input->post('daftarbaru');
    
    $this->validateSignUp($data);
  }

  public function validateSignUp($data){

    $username = $data['user'];
    $pass = $data['password'];
    $confpass = $data['passconfirm'];
    $valid=true;

    if($pass != $confpass){
      $errmess['pesan'] = 'Konfirmasi password tidak sama';
      $valid=false;
    }

    if (strlen($username) < 4){
      $errmess['pesan'] = 'Username harus lebih dari 4 karakter';
      $valid=false;
    } else if (!preg_match("/[A-Za-z][A-Za-z0-9_]*/",)){
      $errmess['pesan'] = 'Username harus diawali huruf';
      $valid=false;
    }

    if(strlen($pass)<6||strlen($pass)>24){
      $errmess['pesan'] = 'Panjang password tidak valid');
      $valid=false;
    }
     if($valid){
       $this->load->model('Anggota_Model');
       $this->Anggota_Model->registerNewAnggota($data);
     }
     else $this->load->view('notifikasi',$errmess);
  }
}
