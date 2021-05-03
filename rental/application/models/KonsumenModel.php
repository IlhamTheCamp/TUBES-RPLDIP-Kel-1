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
    return $this->db->insert('konsumen', $data);
  }

  //Login Konsumen
  public function loginKonsumen($data){
    $this->db->where('usernameKonsumen', $data['username']);
    $this->db->where('password', $data['password']);
    $cek = $this->db->get('konsumen')->row();
		if ($cek) {
			return true;
		} else {
			return false;
		}
  }
}

/* End of file KonsumenModel.php */
/* Location: ./application/models/KonsumenModel.php */