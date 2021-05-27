<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KendaraanModel extends CI_Model {

  function __construct() {
      parent::__construct();
  }

  //Get all data Kendaraan
  public function get_all(){
    return $this->db->get('kendaraan')->result_array();
  }

  //Get data kendaraan berdasarkan no plat
  public function get_kendaraan_noplat($noPlat){
    $this->db->where('noPlat', $noPlat);
    return $this->db->get('kendaraan')->row_array();
  }

  //Get kendaraan berdasarkan merek
  public function get_kendaraan_merek($merekKendaraan){
    $this->db->where('merekKendaraan', $merekKendaraan);
    return $this->db->get('kendaraan')->row_array();
  }

  //Input data kendaraan
  public function insert_kendaraan($data){
    // Parameter data berisi data-data kendaraan yang akan diinputkan
    return $this->db->insert('kendaraan', $data);
  }

  //Update data kendaraan
  public function update_kendaraan($noPlat, $data){
    // Parameter berupa noPlat sebagai PK data kendaraan serta isi data kendaraan yang akan diupdate
    $this->db->where('noPlat', $noPlat);
    return $this->db->update('kendaraan', $data);
  }

  //Delete data kendaraan
  public function delete_kendaraan($noPlat){
    // Parameter berupa noPlat sebagai PK kendaraan yang akan dihapus
    $this->db->where('noPlat', $noPlat);
    return $this->db->delete('kendaraan');
  }

  //Hitung Biaya Sewa
  public function hitungBiaya($durasi, $biayaStandar){
    $biayaTotal = $durasi * $biayaStandar;
    return $biayaTotal;
  }
}

/* End of file KendaraanModel.php */
/* Location: ./application/models/KendaraanModel.php */