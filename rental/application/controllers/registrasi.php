<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class registrasi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('KonsumenModel'); // Load model Konsumen
    }

    public function index()
    {
        $this->load->view('register'); // Load file view bernama register.php
    }

    public function registrasi()
    {
        $data = [
            "usernameKonsumen" => $this->input->post('usernameKonsumen', true), // assign inputan usernameKonsumen ke data username
            "password" => $this->input->post('password', true), // assign inputan password ke data password
            "namaUser" => $this->input->post('namaUser', true), // assign inputan namaUser ke data namaUser
            "alamat" => $this->input->post('alamat', true), // assign inputan alamat ke data alamat
            "noHP" => $this->input->post('noHP', true), // assign inputan noHP ke data noHP
            "email" => $this->input->post('email', true) // assign inputan email ke data email
        ]; // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya diinputkan ke dalam database
        $daftar = $this->KonsumenModel->insert_konsumen($data); // inisiasi variabel daftar yang isinya adalah fungsi insert data pada model ke database konsumen
        if ($daftar == TRUE){
            redirect(site_url('login')); // jika data berhasil diinputkan, user akan diarahkan ke halaman login
        } else {
            $this->load->view('register'); // jika gagal, akan merefresh page register
        }
    }
}