<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota extends CI_Controller {

  public function index(){

  }

  public function viewAnggota(int idAnggota){
    $this->load->model('Anggota_Model');
    $data = $this->Anggota_Model->getDataAnggota($index);

    $this->load->view('anggota',$data);
  }

  public function validateSignUp(){
    $data = $this->input->post('daftarbaru');

    $username = $data['user'];
    $pass = $data['password'];
    $confpass = $data['passconfirm'];

    if($pass != $confpass){
      $this->load->view('notifikasi','Konfirmasi password tidak sama');
    }

    if (strlen($username) < 4){
      $this->load->view('notifikasi','Username harus lebih dari 4 karakter');
    } else if (!preg_match("/[A-Za-z][A-Za-z0-9_]*/",)){
      $this->load->view('notifikasi','Username harus diawali huruf');
    }

    if(strlen($pass)<6||strlen($pass)>24){
      $this->load->view('notifikasi','Panjang password tidak valid');
    }
  }
}
