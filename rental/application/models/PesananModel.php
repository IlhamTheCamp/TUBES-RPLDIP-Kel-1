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

    //Get transaksi berdasarkan kode
    public function get_transaksi_kode($kodeVerifikasi){
        $this->db->where('kodeVerifikasi', $kodeVerifikasi);
        return $this->db->get('transaksi')->row_array();
    }

    //Input pesanan
    public function inputTransaksi($data){
        return $this->db->insert('transaksi', $data);
    }

    //Get all tipe pembayaran
    public function get_all_tipe(){
        return $this->db->get('pembayaran')->result_array();
    }

    //Update tipe pembayaran ke pesanan
    public function updateTransaksi($data, $kodeVerifikasi){
        $this->db->where('kodeVerifikasi', $kodeVerifikasi);
        return $this->db->update('transaksi', $data);
    }

}

/* End of file PesananModel.php */
/* Location: ./application/models/PesananModel.php */