<?php

class HelperModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_asal_pesawat() {
    $query = "SELECT DISTINCT kota_asal FROM biaya_pesawat ORDER BY kota_asal ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_all_tujuan_pesawat() {
    $query = "SELECT DISTINCT kota_tujuan FROM biaya_pesawat ORDER BY kota_tujuan ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_biaya_pesawat($asal, $tujuan) {
    return $this->db->get_where("biaya_pesawat", ['kota_asal' => $asal, 'kota_tujuan' => $tujuan])->row_array();
  }
}