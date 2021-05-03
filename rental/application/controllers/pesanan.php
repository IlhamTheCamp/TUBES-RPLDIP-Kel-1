<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('PesananModel');
    }

    public function index()
    {
        $this->load->view('dummyPesanan');
    }

    public function addPesanan()
    {
        $data = array (
            'kodeVerifikasi' => "test123", //nanti pake random generate
            'usernameKonsumen' => $_SESSION['username'],
            'noPlat' => $this->input->post('noPlat'),
            'IDPembayaran' => "130672",
        );
        $cek = $this->PesananModel->inputTransaksi($data);
        if ($cek) {
            $this->session->set_flashdata('info', 'Kendaraan Berhasil Ditambahkan');
        } else {
            $this->session->set_flashdata('info', 'Kendaraan Gagal Ditambahkan');
        }
        redirect('pesanan', 'refresh');
    }
}