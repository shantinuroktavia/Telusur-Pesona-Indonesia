<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function getDataAnggota($idAnggota){
    $this->load->database();
    $query = $this->db->query('SELECT * FROM Anggota WHERE IdAnggota = '.$this->db->escape($idAnggota).' LIMIT 1');
    return $query->row_array();
  }

  public function registerNewAnggota($data){
    $this->load->database();

    $exist = false;

    $query = $this->db->query('SELECT * FROM Anggota WHERE username = '.$this->db->escape($data['username']).' LIMIT 1');
    if(count($query)!=0){
      $exist=true;
    }

    $query = $this->db->query('SELECT * FROM Anggota WHERE email = '.$this->db->escape($data['email']).' LIMIT 1');
    if(count($query)!=0){
      $exist=true;
    }

    if($exist){
      $errmess['pesan'] = 'Username atau email sudah terdaftar';
      $this->load->view('signup',$errmess);
    }else{
      $this->load->library('encrypt');
      $enc_pass = $this->encrypt->encode($data['password']);
      $this->db->query('INSERT INTO Anggota (username,password,email) VALUES ('.$this->db->escape($data['username']).','.$this->db->escape($enc_pass).','.$this->db->escape($data['email']).')');
      $message['pesan'] = 'Registrasi berhasil';
      $this->load->view('success',$message);
    }
  }

  public function doSignIn($data){
    $this->load->database();
    $success = false;
    $exist = true;

    //cek apa username ada. CASE INSENSITIVE.
    $query = $this->db->query('SELECT * FROM Anggota WHERE username = '.$this->db->escape($data['username']).' LIMIT 1');
    //kalau ada
    if(count($query)!=0){
      //cek password. CASE SENSITIVE.
      $row = $query->row_array();
      $this->load->library('encrypt');
      $enc_pass = $this->encrypt->encode($data['password']);
      if (strcmp($row['password'],$enc_pass)==0){
        //kalo cocok pasang session
        $this->session->set_userdata('username',$data['username']);
        $this->session->set_userdata('remember',$data['remember']);

      } else {
        $success = false;
      }
    } else {
      $success = false;
    }
    return $success;
  }

  public function setPassword($username, $newpass){
    $this->load->database();


    if($this->session->userdata('session_id')){
      $this->load->library('encrypt');
      $enc_pass = $this->encrypt->encode($newpass);
      $query = $this->db->query('UPDATE Anggota set password='.$this->db->escape($enc_pass).' WHERE username='.$this->db->escape($username));

    }
  }

  public function editProfile($username, $data){
    $this->load->database();

    if($data['name']){
    $query = $this->db->query('UPDATE Anggota set nama='.$this->db->escape($enc_pass).' WHERE username='.$this->db->escape($username));
    }
  }
}
?>
