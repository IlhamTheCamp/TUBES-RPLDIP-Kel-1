<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('PesananModel'); // Load Model Pesanan
        $this->load->model('KendaraanModel'); // Load Model Kendaraan
        $this->load->helper('string'); // Untuk generate random code pesanan
    }

    public function index()
    {
        $content['transaksi'] = $this->PesananModel->get_transaksi_kode($_SESSION['kodeVerifikasi']); // Ambil detil transaksi
        $content['pembayaran'] = $this->PesananModel->get_all_tipe(); // Ambil semua tipe pembayaran
        $content['kendaraan'] = $this->KendaraanModel->get_kendaraan_noplat($content['transaksi']['noPlat']); // Ambil detil kendaraan
        $this->load->view('pembayaran', $content); // Load view Pembayaran
    }

    // Fungsi menambahkan pesanan ke dalam database
    public function addPesanan()
    {
        $kendaraan = $this->KendaraanModel->get_kendaraan_noplat($this->input->post('noPlat'));
        $durasi = $this->input->post('durasi');
        $data = array (
            'kodeVerifikasi' => random_string('alnum', 10), //nanti pake random generate
            'usernameKonsumen' => $_SESSION['username'], // assign session username ke dalam data usernameKonsumen
            'noPlat' => $this->input->post('noPlat'), // assign noPlat kendaraan yang dipilih ke dalam data noPlat
            'IDPembayaran' => 0, // assign kode pembayaran yang digunakan ke dalam data IDPembayaran
            'biaya' =>  $kendaraan['biayaStandar'],  // Hitung total pembayaran
        ); // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya diinputkan ke dalam database transaksi
        $_SESSION['kodeVerifikasi'] = $data['kodeVerifikasi']; // buat update IDPembayaran
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

    //Fungsi menambahkan tipe pembayaran ke pesanan
    public function updatePesanan($kodeVerifikasi)
    {
        $transaksi = $this->PesananModel->get_transaksi_kode($_SESSION['kodeVerifikasi']);
        $data = array (
            'kodeVerifikasi' => $transaksi['kodeVerifikasi'], 
            'usernameKonsumen' => $transaksi['usernameKonsumen'], 
            'noPlat' => $transaksi['noPlat'], 
            'IDPembayaran' => $this->input->post('IDPembayaran'), // assign kode pembayaran yang digunakan ke dalam data IDPembayaran
            'biaya' =>  $transaksi['biaya'],
        ); // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya diinputkan ke dalam database transaksi
        $cek = $this->PesananModel->updateTransaksi($data, $kodeVerifikasi);
        if ($cek) {
            // Menampilkan peringatan berhasil jika data berhasil diinputkan
            $this->session->set_flashdata('info', 'Pesanan Berhasil Ditambahkan');
        } else {
            // Menampilkan peringatan gagal jika data gagal diinputkan
            $this->session->set_flashdata('info', 'Pesanan Gagal Ditambahkan');
        }
        // View direfresh dan direct ke view utama controller Pesanan
        redirect('homeKonsumen', 'refresh');
    }
}