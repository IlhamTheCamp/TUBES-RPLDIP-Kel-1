<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('AdminModel'); // Load Model Admin
  }

  public function index()
  {
    $content['title'] = 'Login Admin';
    $this->load->view('loginAdmin', $content); // Load view loginAdmin
  }

  // Fungsi untuk login Admin
  public function loginAdmin()
  {
    $data = [
			"username" => $this->input->post('username', true), // assign inputan username ke data username
			"password" => $this->input->post('password', true), // assign inputan username ke data username
		]; // assign tiap data yang sudah diinputkan ke dalam array $data untuk nantinya dicek ke dalam database
    // inisiasi variabel login yang isinya adalah fungsi login pada model untuk mengecek data ke database admin
    $login = $this->AdminModel->loginAdmin($data);
    if ($login == TRUE) {
      // Jika data ditemukan, set data username ke set session data agar dapat mengetahui admin mana yang sedang login ini
      $this->session->set_userdata('username', $data['username']);
      // View di alihkan ke page homeAdmin
      redirect(site_url('kendaraan'));
    } else {
      // Jika data tidak ditemukan, view loginAdmin akan di refresh
      $this->load->view('loginAdmin');
    }
  }

}
/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */