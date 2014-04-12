<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Anggota_Model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function registerNewAnggota($data){
    $this->load->database();

    $exist = false;

    $query = $this->db->query('SELECT * FROM Anggota WHERE id = '.$this->db->escape($data['username']).' LIMIT 1');
    if(count($query)!=0){
      $exist=true;
    }

    $query = $this->db->query('SELECT * FROM Anggota WHERE email = '.$this->db->escape($data['email']).' LIMIT 1');
    if(count($query)!=0){
      $exist=true;
    }

    if($exist){
      $this->load->library('encrypt');
      $enc_pass = $this->encrypt->encode($data['password']);
      $this->db->query('INSERT INTO Anggota (username,password,email) VALUES ('.$this->db->escape($data['username']).','.$this->db->escape($enc_pass).','.$this->db->escape($data['email']).')');
      $message['pesan'] = 'Registrasi berhasil';
      $this->load->view('success',$message);
    }else{
      $errmess['pesan'] = 'Username atau email sudah terdaftar';
      $this->load->view('signup',$errmess);
    }
  }

  public function doSignIn($data){
    $this->load->database();
    $success = false;
    $exist = true;

    //cek apa username ada. CASE INSENSITIVE.
    $query = $this->db->query('SELECT * FROM Anggota WHERE id = '.$this->db->escape($data['username']).' LIMIT 1');
    //kalau ada
    if(count($query)!=0){
      //cek password. CASE SENSITIVE.
      $row = $query->row_array();
      $this->load->library('encrypt');
      $enc_pass = $this->encrypt->encode($data['password']);
      if (strcmp($row['password'],$enc_pass)==0){
        //kalo cocok pasang cookie
        $cookie = array(
          'name' => 'Telusur Pesona Indonesia',
          'value' => $data['username'],
          'expire' => 86400,
          'domain' => '.telusurpesonaindonesia.com',
          'path'   => '/',
          'prefix' => 'tlpi_',
          'secure' => true
        );
        $this->input->set_cookie($cookie);
      } else {
        $success = false;
      }
    } else {
      $success = false;
    }
    return $success;
  }

  public function changePassword($data){
    $this->load->database();

    $cookie = $this->input->cookie('Telusur Pesona Indonesia');

    if($cookie){
      $username = $cookie['value'];
      $this->load->library('encrypt');
      $enc_pass = $this->encrypt->encode($data['password']);
      $query = $this->db->query('UPDATE Anggota set password='.$this->db->escape($enc_pass).' WHERE username='.$this->db->escape($username));

    }
  }
}
?>
