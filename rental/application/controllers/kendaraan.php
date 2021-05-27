<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kendaraan extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('KendaraanModel');
  }

  public function index()
  {
    //page buat list daftar kendaraan di admin
    $content['title'] = "Home Admin";
    $this->load->view('homeAdmin', $content);
  }

  // Fungsi untuk menuju halaman pesanan
  public function pesanan()
  {
    $content['kendaraan'] = $this->KendaraanModel->get_all(); // Untuk menampilkan semua data kendaraan yang ada
    $this->load->view('pesanan', $content); // Load view pesanan dengan data kendaraan
  }

  // Fungsi untuk input data kendaraan
  public function tambahKendaraan()
  {
    $data = array (
        'noPlat' => $this->input->post('noPlat'), // assign noPlat yang diinputkan ke data noPlat
        'merekKendaraan' => $this->input->post('merekKendaraan'), // assign merekKendaraan yang diinputkan ke data merekKendaraan
        'jenisKendaraan' => $this->input->post('jenisKendaraan'), // assign jenisKendaraan yang diinputkan ke data jenisKendaraan
        'warnaKendaraan' => $this->input->post('warnaKendaraan'), // assign warnaKendaraan yang diinputkan ke data warnaKendaraan
        'biayaStandar' => $this->input->post('biayaStandar'), // assign biayaStandar yang diinputkan ke data biayaStandar
        'durasi' => $this->input->post('durasi'), // assign durasi yang diinputkan ke data durasi
        'stok' => $this->input->post('stok'), // assign stok yang diinputkan ke data stok
    ); // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya diinputkan ke dalam database kendaraan
    // inisiasi variabel cek yang isinya adalah fungsi insert kendaraan pada model ke database kendaraan
    $cek = $this->KendaraanModel->insert_kendaraan($data);
    if ($cek) {
      // Menampilkan peringatan berhasil jika data berhasil diinputkan
      $this->session->set_flashdata('info', 'Kendaraan Berhasil Ditambahkan');
    } else {
      // Menampilkan peringatan gagal jika data gagal diinputkan
      $this->session->set_flashdata('info', 'Kendaraan Gagal Ditambahkan');
    }
    // View direfresh dan direct ke view utama controller Kendaraan
    redirect('kendaraan', 'refresh');
  }

  // Fungsi untuk update data kendaraan dengan parameter noPlat sebagai indikator
  public function updateKendaraan($noPlat)
  {
    // Mengambil data noPlat kendaraan yang akan di update
    $kendaraan = $this->KendaraanModel->get_kendaraan_noplat($noPlat);
    $data = array (
        'noPlat' => $kendaraan['noPlat'], //Data noPlat tidak diubah, tetap sama
        'merekKendaraan' => $this->input->post('merekKendaraan'), // assign merekKendaraan yang diinputkan ke data merekKendaraan
        'jenisKendaraan' => $this->input->post('jenisKendaraan'), // assign jenisKendaraan yang diinputkan ke data jenisKendaraan
        'warnaKendaraan' => $this->input->post('warnaKendaraan'), // assign warnaKendaraan yang diinputkan ke data warnaKendaraan
        'biayaStandar' => $this->input->post('biayaStandar'), // assign biayaStandar yang diinputkan ke data biayaStandar
        'durasi' => $this->input->post('durasi'), // assign durasi yang diinputkan ke data durasi
        'stok' => $this->input->post('stok'), // assign stok yang diinputkan ke data stok
    ); // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya diinputkan ke dalam database kendaraan
    // inisiasi variabel cek yang isinya adalah fungsi update kendaraan pada model ke database kendaraan
    $cek = $this->KendaraanModel->update_kendaraan($noPlat, $data);
    if ($cek) {
      // Menampilkan peringatan berhasil jika data berhasil diinputkan
      $this->session->set_flashdata('info', 'Kendaraan Berhasil Diupdate');
    } else {
      // Menampilkan peringatan gagal jika data gagal diinputkan
      $this->session->set_flashdata('info', 'Kendaraan Gagal Diupdate');
    }
    // View direfresh dan direct ke view utama controller Kendaraan
    redirect('kendaraan', 'refresh');
  }

  // Fungsi untuk delete data kendaraan dengan parameter noPlat sebagai indikator
  public function hapusKendaraan($noPlat)
  {
    // inisiasi variabel cek yang isinya adalah fungsi delete kendaraan dengan parameter noPlat menunjukkan 
    // kendaraan mana yang akan di delete pada model ke database kendaraan
    $cek = $this->KendaraanModel->delete_kendaraan($noPlat);
    if ($cek) {
      // Menampilkan peringatan berhasil jika data berhasil dihapus
      $this->session->set_flashdata('info', 'Kendaraan Berhasil Dihapus');
    } else {
      // Menampilkan peringatan gagal jika data gagal dihapus
      $this->session->set_flashdata('info', 'Kendaraan Gagal Dihapus');
    }
    // View direfresh dan direct ke view utama controller Kendaraan
    redirect('kendaraan','refresh');
  }

}


/* End of file kendaraan.php */
/* Location: ./application/controllers/kendaraan.php */