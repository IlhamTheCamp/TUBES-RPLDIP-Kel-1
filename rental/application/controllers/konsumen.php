<?php
defined('BASEPATH') or exit('No direct script access allowed');

class konsumen extends CI_Controller
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


/* End of file konsumen.php */
/* Location: ./application/controllers/konsumen.php */