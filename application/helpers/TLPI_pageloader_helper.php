<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_view'))
{
  function load_view($viewname,$data)
  {
    $ci=& get_instance();
    $data['body'] = $viewname;
    $ci->load->vars($data);

    //$userId = $ci->input->cookie('TelusurPesonaIndonesia',false);
    $userId = $ci->session->userdata('idAnggotaTLPI');
    if($userId==false){
      $ci->load->view('headerUmum');
    }
    else{
    $ci->load->model('Anggota_Model');
    $arr = $ci->Anggota_Model->getDataAnggota($userId);
    if($arr['Role']=='A') {
      $ci->load->view('headerAdmin');
    }
    else $ci->load->view('headerAnggota');
    }
  }

  function get_username($id){
    $ci=& get_instance();
    $ci->load->model('Anggota_Model');
    $arr = $ci->Anggota_Model->getDataAnggota($id);
    return $arr['Username'];
  }

  function isAdmin($id){
    $ci=& get_instance();
    $ci->load->model('Anggota_Model');
    $arr = $ci->Anggota_Model->getDataAnggota($id);
    return ($arr['Role']==A);
  }

  function isKontributor($id){
    $ci=& get_instance();
    $ci->load->model('Anggota_Model');
    $arr = $ci->Anggota_Model->getDataAnggota($id);
    return ($arr['Role']==K);
  }

  function isThreadStarter($idUser,$idThread){
    $ci=& get_instance();
    $ci->load->model('Forum_Model');
    $thread = $ci->Forum_Model->getFirstPost($idThread);
    return ($idUser==($thread['IdPenulis']));
  }

  function isPoster($idUser,$idPost){
    $ci=& get_instance();
    $ci->load->model('Forum_Model');
    $post = $ci->Forum_Model->getPost($idPost);
    return ($idUser==($post['IdPenulis']));
  }
}
