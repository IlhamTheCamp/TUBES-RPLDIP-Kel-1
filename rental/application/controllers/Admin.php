<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('AdminModel');
  }

  public function index()
  {
    $content['title'] = 'Login Admin';
    $this->load->view('loginAdmin', $content);
  }

  public function loginAdmin()
  {
    $data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
		];
    $login = $this->AdminModel->loginAdmin($data);
    if ($login == TRUE) {
      $this->session->set_userdata('username', $data['username']);
      redirect(base_url());
    } else {
      $this->load->view('loginAdmin');
    }
  }

}


/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */