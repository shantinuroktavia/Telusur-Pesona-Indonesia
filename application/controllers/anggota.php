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
  

    if($pass != $confpass){
      $errmess['pesan'] = 'Konfirmasi password tidak sama';
    }

    if (strlen($username) < 4){
      $errmess['pesan'] = 'Username harus lebih dari 4 karakter';
    } else if (!preg_match("/[A-Za-z][A-Za-z0-9_]*/",)){
      $errmess['pesan'] = 'Username harus diawali huruf';
    }

    if(strlen($pass)<6||strlen($pass)>24){
      $errmess['pesan'] = 'Panjang password tidak valid');
    }
      $this->load->view('notifikasi',$errmess);
  }
}
