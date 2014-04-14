<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {

  public function index(){
    $this->load->model('Forum_Model');
    $data['threads'] = $this->Forum_Model->getAllThreads();
    $this->load->view('forum',$data);
  }

  public function showThread($idThread){

  }
}
