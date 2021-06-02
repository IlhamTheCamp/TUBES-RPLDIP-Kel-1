<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('PesananModel'); // Load Model Pesanan
        $this->load->helper('string'); // Untuk generate random code pesanan
    }

    public function index()
    {
        $this->load->view('dummyPesanan'); // Load view dummyPesanan
    }

    // Fungsi menambahkan pesanan ke dalam database
    public function addPesanan()
    {
        $data = array (
            'kodeVerifikasi' => "test123", //nanti pake random generate
            'usernameKonsumen' => $_SESSION['username'], // assign session username ke dalam data usernameKonsumen
            'noPlat' => $this->input->post('noPlat'), // assign noPlat kendaraan yang dipilih ke dalam data noPlat
            'IDPembayaran' => random_string('alnum', 10), // assign kode pembayaran yang digunakan ke dalam data IDPembayaran
        ); // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya diinputkan ke dalam database transaksi
        $cek = $this->PesananModel->inputTransaksi($data); // inisiasi variabel cek yang isinya adalah fungsi insert data pada model ke database transaksi
        if ($cek) {
            // Menampilkan peringatan berhasil jika data berhasil diinputkan
            $this->session->set_flashdata('info', 'Pesanan Berhasil Ditambahkan');
        } else {
            // Menampilkan peringatan gagal jika data gagal diinputkan
            $this->session->set_flashdata('info', 'Pesanan Gagal Ditambahkan');
        }
        // View direfresh dan direct ke view utama controller Pesanan
        redirect('pesanan', 'refresh');
    }
}