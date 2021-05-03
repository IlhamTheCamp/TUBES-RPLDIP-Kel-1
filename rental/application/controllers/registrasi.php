<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('KonsumenModel');
    }

    public function index()
    {
        $this->load->view('register');
    }

    public function registrasi()
    {
        $data = [
            "usernameKonsumen" => $this->input->post('usernameKonsumen', true),
            "password" => $this->input->post('password', true),
            "namaUser" => $this->input->post('namaUser', true),
            "alamat" => $this->input->post('alamat', true),
            "noHP" => $this->input->post('noHP', true),
            "email" => $this->input->post('email', true)
        ];
        $daftar = $this->KonsumenModel->insert_konsumen($data);
        if ($daftar == TRUE){
            redirect(site_url('login'));
        } else {
            $this->load->view('register');
        }
    }
}