<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AdminModel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function loginAdmin($data)
	//Fungsi utama untuk usecase login admin
		{
			$this->db->where('username', $data['username']); // mengambil data username yang diinputkan
			$this->db->where('password', $data['password']); // mengambil data password yang diinputkan
			$cek = $this->db->get('admin')->row(); // mengecek apakah data yang diinputkan ada di database atau tidak
			if ($cek) { 
				return true; // jika ada, akan mengembalikan nilai true
			} else {
				return false; // jika tidak, akan mengembalikan nilai false
			}
		}
}

/* End of file AdminModel_model.php */
/* Location: ./application/models/AdminModel_model.php */