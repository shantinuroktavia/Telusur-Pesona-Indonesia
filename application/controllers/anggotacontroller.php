<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AnggotaController extends CI_Controller {

  public function index(){
    show_404();
  }

  public function view($idAnggota){
    $this->load->model('Anggota_Model');
    $data['anggota'] = $this->Anggota_Model->getDataAnggota($idAnggota);

    load_view('lihatprofil',$data);
  }

  public function daftarBaru(){
    if(!empty($_POST)){
      $data = $this->input->post();
      $this->validateSignUp($data);
    }
    else
    {
      $errmess['pesan'] = "Tolong isi dengan benar.";
      $errmess['redirdest'] = 'SignUp';
      $errmess['body'] = 'notifikasi';
      $this->load->vars($errmess);
      $this->load->view('headerUmum');
    }
  }

  public function validateSignUp($data){

    $username = $data['username'];
    $pass = $data['password'];
    $confpass = $data['passconfirm'];
    $email = $data['email'];
    $valid=true;
    $success=false;
    $errmess=array();

    if($pass != $confpass){
      $errmess['pesan'] = 'Konfirmasi password tidak sama';
      $valid=false;
    }

    if (strlen($username) < 4){
      $errmess['pesan'] = 'Username minimal harus 4 karakter';
      $valid=false;
    } else if (!preg_match("/[A-Za-z][A-Za-z0-9_]*/",$username)){
      $errmess['pesan'] = 'Username harus diawali huruf';
      $valid=false;
    }

    if(strlen($pass)<6||strlen($pass)>24){
      $errmess['pesan'] = 'Panjang password tidak valid';
      $valid=false;
    } else if (!preg_match("/[A-Za-z0-9_]+/", $pass)){
      $errmess['pesan'] = 'Password tidak valid';
      $valid=false;
    }

    if (!preg_match("/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/", $email)) {

      $errmess['pesan'] = 'Alamat email tidak valid';
      $valid=false;
    }

    if($valid){
      $this->load->model('Anggota_Model');
      $success = $this->Anggota_Model->registerNewAnggota($data);
    }

    if ($success){
      $errmess['pesan'] = "Pendaftaran berhasil. Silahkan cek email Anda.";
      $errmess['redirdest'] = 'HomeUI';
    }else{
      //$errmess['pesan'] = "Terdapat kesalahan pengisian. Silahkan ulangi pendaftaran.";
      $errmess['redirdest'] = 'SignUp';
    }
    load_view('notifikasi',$errmess);
  }

  public function verifikasi()
  {
    $success = false;
    $data = $this->input->get();
    if($data['c']&&$data['u']){
      $this->load->model('Anggota_Model');
      $success = $this->Anggota_Model->verify($data);
    }

    if($success){
      $notif['pesan'] = "Akun Anda telah diaktifkan.";
      $notif['redirdest'] = 'HomeUI';
    }
    else{
      $notif['pesan'] = "Verifikasi gagal.";
      $notif['redirdest'] = 'HomeUI';
    }
    load_view('notifikasi',$notif);
  }

  public function signIn(){
    if(!empty($_POST)){
      $data = $this->input->post();
      $this->validateSignIn($data);
    }
    else
    {
      $errmess['pesan'] = "Tolong isi dengan benar.";
      $errmess['redirdest'] = 'SignIn';
      load_view('notifikasi',$errmess);
    }
  }

  public function validateSignIn($data){
    $username = $data['username'];
    $pass = $data['password'];
    $valid = true;
    $success = true;

    if (strlen($username) < 4||!preg_match("/[A-Za-z][A-Za-z0-9_]*/",$username)){
      $valid=false;
    }

    if($valid){
      $this->load->model('Anggota_Model');
      $success = $this->Anggota_Model->doSignIn($data);
    }
    else $success = false;

    $errmess = array();
    if ($success){
      redirect(base_url());
    }else{
      redirect(site_url('SignIn'));
    }
  }

  public function signOut(){
    delete_cookie("TelusurPesonaIndonesia");
    $this->session->unset_userdata('idAnggotaTLPI');
    redirect(base_url());
  }

  public function changePass(){
    if(!empty($_POST)){
      $data = $this->input->post();
      $valid=true;
      $success=false;

      $oldpass = $data['passlama'];
      $pass = $data['password'];
      $confpass = $data['passconfirm'];

      if($pass != $confpass){
        $errmess['pesan'] = 'Konfirmasi password tidak sama';
        $valid=false;
      }else if(strlen($pass)<6||strlen($pass)>24){
        $errmess['pesan'] = 'Panjang password tidak valid';
        $valid=false;
      } else if (!preg_match("/[A-Za-z0-9_]+/",$pass)){
        $errmess['pesan'] = 'Password tidak valid';
        $valid=false;
      }

      $this->load->model('Anggota_Model');
      if($valid){
        $username = $data['username'];
        $success = $this->Anggota_Model->setPassword($username,$pass);
      }

      if ($success){
        $errmess['pesan'] = "Ubah password berhasil.";
        $errmess['redirdest'] = 'profil/'.get_cookie('TelusurPesonaIndonesia');

      }else{
        $errmess['pesan'] = "Ubah password gagal.";
        $errmess['redirdest'] = 'ubahpassword';
      }

      $errmess['anggota'] = $this->Anggota_Model->getDataAnggota(get_cookie('TelusurPesonaIndonesia'));
      load_view('notifikasi',$errmess);
    }

  }

  public function changeProfile(){
    if(!empty($_POST)){
      $data = $this->input->post();
      $this->load->model('Anggota_Model');
      $success = $this->Anggota_Model->editProfile($data);
      if ($success){
        $errmess['pesan'] = "Ubah profil berhasil.";
        $errmess['redirdest'] = 'profil/'.get_cookie('TelusurPesonaIndonesia');
      }else{
        $errmess['pesan'] = "Ubah profil gagal.";
        $errmess['redirdest'] = 'ubahprofil';
      }
      $errmess['anggota'] = $this->Anggota_Model->getDataAnggota(get_cookie('TelusurPesonaIndonesia'));
      load_view('notifikasi',$errmess);
    }
  }
}
