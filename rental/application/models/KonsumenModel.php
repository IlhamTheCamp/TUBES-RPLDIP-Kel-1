<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KonsumenModel extends CI_Model {

  function __construct() {
      parent::__construct();
  }

  //Get all Konsumen
  public function get_all(){
      return $this->db->get('konsumen')->result_array();
  }

  //Get konsumen berdasarkan nama
  public function get_konsumen_nama($namaUser){
      $this->db->where('namaUser', $namaUser);
      return $this->db->get('konsumen')->row_array();
  }

  //Input data konsumen (Registrasi)
  public function insert_konsumen($data){
    return $this->db->insert('konsumen', $data); //Fungsi untuk menginsert data konsumen pada variable $data ke dalam database
  }

  //Login Konsumen
  public function loginKonsumen($data){ //Parameter data merupakan array berisi data username & password yang diinputkan user
    $this->db->where('usernameKonsumen', $data['username']); // mengambil data username yang diinputkan & mengeceknya di database
    $this->db->where('password', $data['password']); // mengambil data password yang diinputkan & mengeceknya di database
    $cek = $this->db->get('konsumen')->row(); // mengecek database dan mereturn data konsumen tersebut jika ada
		if ($cek) {
			return true; // mereturn true jika datanya ada
		} else {
			return false; // mereturn false jika datanya tidak ada
		}
  }
}

/* End of file KonsumenModel.php */
/* Location: ./application/models/KonsumenModel.php */