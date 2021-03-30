<?php
defined('BASEPATH') or exit('No direct script access allowed');

class home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('HomeModel');
  }

  public function index()
  {
    $content['title'] = "Landing Page";
    $this->load->view('homepage', $content);
  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */