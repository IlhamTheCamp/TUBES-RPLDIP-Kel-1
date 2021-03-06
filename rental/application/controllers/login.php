<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('KonsumenModel'); // Load Model Konsumen
        $this->load->library("unit_test");
    }

    public function index()
    {
        $this->load->view('login'); // Load file view bernama login.php
    }

    // Fungsi untuk login Konsumen
    public function loginKonsumen()
    {
        $data = [
            "username" => $this->input->post('username', true), // assign inputan username ke data username
            "password" => $this->input->post('password', true), // assign inputan password ke data password
        ]; // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya dicek ke dalam database
        // inisiasi variabel masuk yang isinya adalah fungsi login pada model untuk mengecek data ke database konsumen
        $masuk = $this->KonsumenModel->loginKonsumen($data); 
        if ($masuk){
            // Jika data ditemukan, set data username ke set session data agar dapat mengetahui user mana yang sedang login ini
            $this->session->set_userdata('username', $data['username']);
            // View di alihkan ke page homeKonsumen
            redirect(site_url('homeKonsumen'));
            return "6";
        } else {
            // Jika data tidak ditemukan, view login akan di refresh
            $this->load->view('login');
            return "1";
        }
    }

    //Testing Login
    public function testLoginKonsumen()
    {
        $test = $this->loginKonsumen();
        $expected = "6";
        $name = "Test Login Konsumen -- Login Berhasil";
        echo $this->unit->run($test, $expected, $name);
    }
}