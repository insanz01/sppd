<?php

class HelperModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_karyawan() {
    return $this->db->get("karyawan")->result_array();
  }

  public function get_biaya_hotel($provinsi) {
    return $this->db->get_where("uang_hotel_perjalanan_dinas", ["nama_provinsi" => $provinsi])->row_array();
  }

  public function get_biaya_pesawat($kabupaten, $kelas) {
    return $this->db->get_where("biaya_pesawat", ["kota_tujuan" => $kabupaten])->row_array();
  }

  public function get_biaya_harian($provinsi) {
    return $this->db->get_where("uang_harian_perjalanan_dinas", ["nama_provinsi" => $provinsi])->row_array();
  }

  public function get_biaya_taxi($provinsi) {
    return $this->db->get_where("uang_taxi_perjalanan_dinas", ["nama_provinsi" => $provinsi])->row_array();
  }

  public function get_biaya_sewa($provinsi) {
    return $this->db->get_where("uang_transportasi_perjalanan_dinas", ["nama_provinsi" => $provinsi])->row_array();
  }

  public function get_detail_sppd($nomor_SPPD) {
    return $this->db->get_where("surat_perintah_perjalanan_dinas", ['nomor_SPPD' => $nomor_SPPD])->row_array();
  }

  public function get_detail_sppd_by_hash($hash_id) {
    return $this->db->get_where("surat_perintah_perjalanan_dinas", ['hash_id' => $hash_id])->row_array();
  }

  public function get_detail_spt($nomor_SPPD) {
    return $this->db->get_where("surat_perintah_tugas", ['nomor_SPPD' => $nomor_SPPD])->row_array();
  }

  public function get_detail_spt_by_hash($hash_id) {
    return $this->db->get_where("surat_perintah_tugas", ['hash_id' => $hash_id])->row_array();
  }

  public function get_all_asal_pesawat() {
    $query = "SELECT DISTINCT kota_asal FROM biaya_pesawat ORDER BY kota_asal ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_all_tujuan_pesawat() {
    $query = "SELECT DISTINCT kota_tujuan FROM biaya_pesawat ORDER BY kota_tujuan ASC";

    return $this->db->query($query)->result_array();
  }

  public function get_biaya_pesawat_v2($asal, $tujuan) {
    return $this->db->get_where("biaya_pesawat", ['kota_asal' => $asal, 'kota_tujuan' => $tujuan])->row_array();
  }

  public function get_all_jabatan() {
    $query = "SELECT LOWER(jabatan) as jabatan, COUNT(*) as jumlah FROM surat_perintah_perjalanan_dinas GROUP BY jabatan";

    return $this->db->query($query)->result_array();
  }
}