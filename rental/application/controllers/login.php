<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('KonsumenModel');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => $this->input->post('password', true),
        ];
        $masuk = $this->KonsumenModel->loginKonsumen($data);
        if ($masuk == TRUE){
            $this->session->set_userdata('username', $data['username']);
            redirect(site_url('homeKonsumen'));
        } else {
            $this->load->view('login');
        }
    }
}