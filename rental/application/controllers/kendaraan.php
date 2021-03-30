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
  }

  public function tambahKendaraan()
  {
    $data = array (
        'noPlat' => $this->input->post('noPlat'),
        'merekKendaraan' => $this->input->post('merekKendaraan'),
        'jenisKendaraan' => $this->input->post('jenisKendaraan'),
        'warnaKendaraan' => $this->input->post('warnaKendaraan'),
        'biayaStandar' => $this->input->post('biayaStandar'),
        'durasi' => $this->input->post('durasi'),
        'stok' => $this->input->post('stok'),
    );
    $cek = $this->KendaraanModel->insert_kendaraan($data);
    if ($cek) {
    $this->session->set_flashdata('info', 'Kendaraan Berhasil Ditambahkan');
    } else {
    $this->session->set_flashdata('info', 'Kendaraan Gagal Ditambahkan');
    }
    redirect('kendaraan', 'refresh');
  }

  public function updateKendaraan($noPlat)
  {
    $kendaraan = $this->KendaraanModel->get_kendaraan_noplat($noPlat);
    $data = array (
        'noPlat' => $kendaraan['noPlat'],
        'merekKendaraan' => $this->input->post('merekKendaraan'),
        'jenisKendaraan' => $this->input->post('jenisKendaraan'),
        'warnaKendaraan' => $this->input->post('warnaKendaraan'),
        'biayaStandar' => $this->input->post('biayaStandar'),
        'durasi' => $this->input->post('durasi'),
        'stok' => $this->input->post('stok'),
    );
    $cek = $this->KendaraanModel->update_kendaraan($noPlat, $data);
    if ($cek) {
        $this->session->set_flashdata('info', 'Kendaraan Berhasil Diupdate');
        } else {
        $this->session->set_flashdata('info', 'Kendaraan Gagal Diupdate');
        }
        redirect('kendaraan', 'refresh');
  }

  public function hapusKendaraan($noPlat)
  {
    $cek = $this->KendaraanModel->delete_kendaraan($noPlat);
    if ($cek) {
        $this->session->set_flashdata('info', 'Kendaraan Berhasil Dihapus');
    } else {
        $this->session->set_flashdata('info', 'Kendaraan Gagal Dihapus');
    }
    redirect('kendaraan','refresh');
  }

}


/* End of file kendaraan.php */
/* Location: ./application/controllers/kendaraan.php */