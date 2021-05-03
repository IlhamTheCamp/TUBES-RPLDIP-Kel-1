<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class loginAdmin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {
        $this->load->view('loginAdmin');
    }

    public function loginAdmin()
    {
        $data = [
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
		];
		$masuk = $this->UserModel->loginAdmin($data);
		if ($masuk == TRUE) {
			$this->session->set_userdata('username', $data['username']);
			redirect(base_url());
		} else {
			$this->load->view('loginAdmin');
		}
    }
}