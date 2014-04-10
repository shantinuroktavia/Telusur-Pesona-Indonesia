<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota_Model extends CI_Model {
  public function index(){
    show_404();
  }

  public function registerNewAnggota($data){
    $this->load->database();
    
    $exist = false;

    $query = $this->db->query('SELECT * FROM Anggota WHERE id='.$data['username']);
    if(count($query)!=0){
      $exist=true;
    }
    
    $query = $this->db->query('SELECT * FROM Anggota WHERE email='.$data['email']);
    if(count($query)!=0){
      $exist=true;
    }
    
    if(exist){
      $this->db->quert('INSERT INTO Anggota');
      $message['pesan'] = 'Registrasi berhasil';
    $this->load->view('notifikasi',$message);
    }else{
      $errmess['pesan'] = 'Username atau email sudah terdaftar';
      $this->load->view('notifikasi',$errmess);
    }
  }
}
?>
