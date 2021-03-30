<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AdminModel extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function loginAdmin($data)
		{
			$this->db->where('username', $data['username']);
			$this->db->where('password', $data['password']);
			$cek = $this->db->get('admin')->row();
			if ($cek) {
				return true;
			} else {
				return false;
			}
		}
}

/* End of file AdminModel_model.php */
/* Location: ./application/models/AdminModel_model.php */