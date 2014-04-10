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

    $username = $data['username'];
    $pass = $data['password'];
    $confpass = $data['passconfirm'];
    $email = $data['emailaddress'];
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
    
    if (!preg_match("/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/", $email)) {
      
      $errmess['pesan'] = 'Alamat email tidak valid');
      $valid=false;
    }
    
     if($valid){
       $this->load->model('Anggota_Model');
       $this->Anggota_Model->registerNewAnggota($data);
     }
     else $this->load->view('notifikasi',$errmess);
  }
}
