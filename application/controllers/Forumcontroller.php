<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forumcontroller extends CI_Controller {

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  * 		http://example.com/index.php/welcome
  *	- or -
  * 		http://example.com/index.php/welcome/index
  *	- or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see http://codeigniter.com/user_guide/general/urls.html
  */

  public function index()
  {
    $this->load->model('Forum_Model');
    $threads = $this->Forum_Model->getAllThreads();
    $threadlist = array();
    $count = 0;

    foreach ($threads as $thread){
      $threadlist[$count]['IdThread'] = $thread['IdThread'];
      $threadlist[$count]['JudulThread'] = $thread['JudulThread'];
      $firstpost = $this->Forum_Model->getFirstPost($thread['IdThread']);
      $threadlist[$count]['starter'] = get_username($firstpost['IdPenulis']);
      $lastpost = $this->Forum_Model->getLastPost($thread['IdThread']);
      $threadlist[$count]['balasanterakhir'] = $lastpost['WaktuPost'];
      $threadlist[$count]['jumlahbalasan'] = $this->Forum_Model->getJumlahPost($thread['IdThread']) - 1;
      $count++;
    }

    load_view('forum',array('threadlist' => $threadlist));
  }

  public function newThreadForm(){
    $user_cookie = $this->session->userdata('idAnggotaTLPI');
    if($user_cookie==false){
      load_view('notifikasi',array('pesan' => 'Harap sign in untuk membuat thread baru.','redirdest' => 'forum'));
    }
    else load_view('newThread',array());
  }

  public function makeNewThread(){
    $success = false;
    $user_cookie = $this->session->userdata('idAnggotaTLPI');
    if (!empty($_POST)&&$user_cookie!=false) {
      $data = $this->input->post();
      $data['userId'] = $this->input->cookie('TelusurPesonaIndonesia',false);
      $this->load->model('Forum_Model');
      $success = $this->Forum_Model->makeNewThread($data);
    }
    if($success){
      $errmess['pesan'] = "Thread berhasil dibuat.";
      $errmess['redirdest'] = 'forum';
    }else{
      $errmess['pesan'] = "Gagal membuat thread.";
      $errmess['redirdest'] = 'newThread';
    }
    load_view('notifikasi',$errmess);

  }

  public function showThread($id){
    $this->load->model('Forum_Model');
    $posts = $this->Forum_Model->getAllPosts($id);

    load_view('forumContent',array('postlist' => $posts, 'idThread' => $id));
  }

  public function makenewPost($id){
    $success = false;
    $user_cookie = $this->input->cookie('TelusurPesonaIndonesia',false);
    if(!empty($_POST)&&$user_cookie!=false){
    $this->load->model('Forum_Model');
      $data = $this->input->post();
      $data['userId'] = $this->input->cookie('TelusurPesonaIndonesia',false);
      $data['IdThread'] = $id;
      $this->load->model('Forum_Model');
      $success = $this->Forum_Model->makeNewPost($data);
    }

    if($success){
      $errmess['pesan'] = "Balasan berhasil dikirim.";
    }else{
      $errmess['pesan'] = "Gagal mengirim balasan.";
    }
    $errmess['redirdest'] = '/forum/'.$id;
    load_view('notifikasi',$errmess);
  }
}
