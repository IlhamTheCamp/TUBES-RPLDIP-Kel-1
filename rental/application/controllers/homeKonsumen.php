<?php
defined('BASEPATH') or exit('No direct script access allowed');

class homeKonsumen extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel');
  }

  public function index()
  {
    $content['title'] = "Home Konsumen";
    $this->load->view('homeKonsumen', $content);
  }

  public function logout()
  {
      $this->session->sess_destroy();
      redirect(site_url('login'));
  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */