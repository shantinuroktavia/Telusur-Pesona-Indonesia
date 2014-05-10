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
    $this->load->library('encrypt');
    $com_code = md5(uniqid(rand()));
    //$enc_pass = $this->encrypt->encode($data['password']);
    //$this->db->query('INSERT INTO Anggota (username,password,email) VALUES ('.$this->db->escape($data['username']).','.$this->db->escape($enc_pass).','.$this->db->escape($data['email']).')');
    $this->db->query('INSERT INTO Anggota (username,password,email,confirmationCode) VALUES ('.$this->db->escape($data['username']).','.$this->db->escape($data['password']).','.$this->db->escape($data['email']).','.$this->db->escape($com_code).')');
    //$message['pesan'] = 'Registrasi berhasil';
    $success = ($this->db->affected_rows() != 1) ? false : true;
    if($success){
      /*//$this->session->set_userdata('username',$data['username']);
      $cookiedata = array(
      'name' => 'TelusurPesonaIndonesia',
      'value' => $data['username'],
      'expire' => 3600,
      'secure' => TRUE
      );
      //$this->session->set_userdata('username',$data['username']);
      // $this->session->set_userdata('remember',$data['remember']);
      $this->input->set_cookie($cookiedata);

      */

      $config = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'tomfisher200693@gmail.com',
        'smtp_pass' => 'p3m4nc1ng',
        'mailtype'  => 'html',
        'charset'   => 'iso-8859-1'
      );
      $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('noreply@telusurpesonaindonesia.com');
      $this->email->to($data['email']);
      $this->email->subject('Verifikasi Pendaftaran Telusur Pesona Indonesia');
      $this->email->message('Akun Anda telah dibuat.
        Klik tautan berikut untuk mengaktifkan akun Anda: <a href='.site_url('anggota/verifikasi').'?u='.$data['username'].'&c='.$com_code.'>Klik di sini</a>');
      $this->email->send();
    }
    return $success;
  }

  public function verify($data){
    $this->load->database();
    $data2 = array('confirmationCode' => NULL);
    $where = "username = ".$this->db->escape($data['u'])." AND confirmationCode = ".$this->db->escape($data['c']);
    $str = $this->db->update_string('anggota', $data2, $where);

    $this->db->query($str);
    $success = ($this->db->affected_rows() != 1) ? false : true;
    return $success;
  }

  public function doSignIn($data){
    $this->load->database();
    $success = true;
    $exist = true;

    //cek apa username ada. CASE INSENSITIVE.
    $query = $this->db->query('SELECT * FROM Anggota WHERE username = '.$this->db->escape($data['username']).' LIMIT 1');
    //kalau ada
    if(count($query)!=0){
      //cek password. CASE SENSITIVE.
      $row = $query->row_array();
      $this->load->library('encrypt');
      //$enc_pass = $this->encrypt->encode($data['password']);
      //if (strcmp($row['password'],$enc_pass)==0){
      if (strcmp($row['Password'],$data['password'])==0){
        //kalo cocok pasang session
        $cookiedata = array(
          'name' => 'TelusurPesonaIndonesia',
          'value' => $row['IdAnggota'],
          'expire' => 3600,
          'secure' => false
        );
        $this->session->set_userdata('idAnggotaTLPI',$row['IdAnggota']);
        $this->input->set_cookie($cookiedata);
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

    $this->load->library('encrypt');
    // $enc_pass = $this->encrypt->encode($newpass);
    $query = $this->db->query('UPDATE Anggota SET Password='.$this->db->escape($newpass).' WHERE Username='.$this->db->escape($username));

    return true;
  }

  public function editProfile($data){
    $this->load->database();

    $query = $this->db->query('UPDATE Anggota set Nama='
      .$this->db->escape($data['nama']).',Birthdate='
    .$this->db->escape($data['ttl']).',Lokasi='
    .$this->db->escape($data['lokasi']).', Pekerjaan='
    .$this->db->escape($data['job']).', Website='
    .$this->db->escape($data['web']).' WHERE Username='.$this->db->escape($data['username']));

    return ($this->db->affected_rows() != 1?false:true);
  }
}
?>
