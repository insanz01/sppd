<?php

class PengajuanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function insert_laporan_perjalanan_dinas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);

    $this->db->insert('laporan_perjalanan_dinas', $data);
    return $data['hash_id'];
  }

  public function get_laporan_perjalanan_dinas($hash_id) {
    return $this->db->get_where('laporan_perjalanan_dinas', ['hash_id' => $hash_id])->row_array();
  }

  public function insert_surat_perintah_tugas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);

    $this->db->insert('surat_perintah_tugas', $data);
    return $data['hash_id'];
  }

  public function get_surat_perintah_tugas($hash_id) {
    return $this->db->get_where('surat_perintah_tugas', ['hash_id' => $hash_id])->row_array();
  }
  
  public function insert_surat_perintah_perjalanan_dinas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);

    $this->db->insert('surat_perintah_perjalanan_dinas', $data);
    return $data['hash_id'];
  }

  public function get_surat_perintah_perjalanan_dinas($hash_id) {
    return $this->db->get_where('surat_perintah_perjalanan_dinas', ['hash_id' => $hash_id])->row_array();
  }

  public function insert_biaya_perjalanan_dinas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);

    $this->db->insert('biaya_perjalanan_dinas', $data);
    return $data['hash_id'];
  }

  public function get_biaya_perjalanan_dinas($hash_id) {
    return $this->db->get_where('biaya_perjalanan_dinas', ['hash_id' => $hash_id])->row_array();
  }
}