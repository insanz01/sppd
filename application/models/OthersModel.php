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

  public function get_all_karyawan() {
    $query = "SELECT * FROM karyawan";

    return $this->db->query($query)->result_array();
  }

  public function get_all_penolakan() {
    $query = "SELECT t.id, t.hash_id, t.alasan, s.nomor_SPPD, s.nip_karyawan, s.nama_karyawan FROM tolak_surat_perintah_perjalanan_dinas t JOIN surat_perintah_perjalanan_dinas s ON t.hash_id = s.hash_id";

    return $this->db->query($query)->result_array();
  }

  public function get_all_pengganti() {
    return $this->db->get("pengganti_surat_perintah_perjalanan_dinas")->result_array();
  }

  public function get_all_kinerja_detail($NIP) {
    $query = "SELECT lpd.id, lpd.hash_id, k.NIP, k.nama, lpd.poin_hasil_kegiatan, lpd.skor_penilaian FROM laporan_perjalanan_dinas lpd JOIN karyawan k ON lpd.user_id = k.user_id WHERE k.NIP = '$NIP'";

    $kinerja_detail = $this->db->query($query)->result_array();

    $results = [];

    foreach ($kinerja_detail as $kd) {
      $keterangan_poin = "";
      switch($kd["skor_penilaian"]) {
        case 1:
          $keterangan_poin = "buruk";
          break;
        case 2:
          $keterangan_poin = "cukup";
          break;
        case 3:
          $keterangan_poin = "baik";
          break;
        case 4:
          $keterangan_poin = "sangat baik";
          break;
        default:
          $keterangan_poin = "belum di-set";
      }

      $result = $kd;
      $result['poin'] = $keterangan_poin;

      array_push($results, $result);
    }

    return $results;
  }
}