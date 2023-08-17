<?php

class OthersModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_biaya_harian() {
    $query = "SELECT * FROM uang_harian_perjalanan_dinas ORDER BY nama_provinsi ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_biaya_hotel() {
    $query = "SELECT * FROM uang_hotel_perjalanan_dinas ORDER BY nama_provinsi ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_biaya_taxi() {
    $query = "SELECT * FROM uang_taxi_perjalanan_dinas ORDER BY nama_provinsi ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_biaya_pesawat() {
    $query = "SELECT * FROM biaya_pesawat ORDER BY kota_tujuan ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_biaya_sewa() {
    $query = "SELECT * FROM uang_transportasi_perjalanan_dinas ORDER BY nama_provinsi ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_riwayat_penolakan() {
    $query = "SELECT * FROM batalkan_perintah_tugas";

    return $this->db->query($query)->result_array();
  }
}