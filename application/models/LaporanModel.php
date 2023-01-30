<?php

class LaporanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_reports($target) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_all_laporan_perjalanan_dinas();
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_all_surat_perintah_perjalanan_dinas();
        break;
      case "surat_perintah_tugas":
        return $this->get_all_surat_perintah_tugas();
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_all_biaya_perjalanan_dinas();
        break;
    }
  }

  public function get_all_laporan_perjalanan_dinas() {
    $query = "SELECT * FROM laporan_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_perjalanan_dinas() {
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_tugas() {
    $query = "SELECT * FROM surat_perintah_tugas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_biaya_perjalanan_dinas() {
    $query = "SELECT * FROM biaya_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }
}