<?php

class AppModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_total_pegawai() {
    $pegawai = $this->db->get('karyawan')->result_array();

    return COUNT($pegawai);
  }

  public function get_total_biaya_perjalanan_dinas() {
    $data = $this->db->get('biaya_perjalanan_dinas')->result_array();

    return COUNT($data);
  }

  public function get_total_laporan_perjalanan_dinas() {
    $data = $this->db->get('laporan_perjalanan_dinas')->result_array();

    return COUNT($data);
  }

  public function get_total_surat_perintah_perjalanan_dinas() {
    $data = $this->db->get('surat_perintah_perjalanan_dinas')->result_array();

    return COUNT($data);
  }

  public function get_total_surat_perintah_tugas() {
    $data = $this->db->get('surat_perintah_tugas')->result_array();

    return COUNT($data);
  }
}