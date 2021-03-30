<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PesananModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //Get all pesanan
    public function get_all(){
        return $this->db->get('transaksi')->result_array();
    }

    //Input pesanan
    public function inputTransaksi($data){
        return $this->db->insert('transaksi', $data);
    }

}

/* End of file PesananModel.php */
/* Location: ./application/models/PesananModel.php */