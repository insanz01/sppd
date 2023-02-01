<?php

class PengajuanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function insert_laporan_perjalanan_dinas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);
    $data['user_id'] = $this->session->userdata('SESS_SPPD_USERID');

    $this->db->insert('laporan_perjalanan_dinas', $data);
    return $data['hash_id'];
  }

  public function get_laporan_perjalanan_dinas($hash_id) {
    return $this->db->get_where('laporan_perjalanan_dinas', ['hash_id' => $hash_id])->row_array();
  }

  public function edit_laporan_perjalanan_dinas($data, $hash_id) {
    $this->db->set($data);
    $this->db->where('hash_id', $hash_id);
    $this->db->update('laporan_perjalanan_dinas');

    return $this->db->affected_rows();
  }

  public function delete_laporan_perjalanan_dinas($hash_id) {
    return $this->db->delete('laporan_perjalanan_dinas', ['hash_id' => $hash_id]);
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

  public function edit_surat_perintah_tugas($data, $hash_id) {
    $this->db->set($data);
    $this->db->where('hash_id', $hash_id);
    $this->db->update('surat_perintah_tugas');

    return $this->db->affected_rows();
  }

  public function delete_surat_perintah_tugas($hash_id) {
    return $this->db->delete('surat_perintah_tugas', ['hash_id' => $hash_id]);
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

  public function edit_surat_perintah_perjalanan_dinas($data, $hash_id) {
    $this->db->set($data);
    $this->db->where('hash_id', $hash_id);
    $this->db->update('surat_perintah_perjalanan_dinas');

    return $this->db->affected_rows();
  }

  public function delete_surat_perintah_perjalanan_dinas($hash_id) {
    return $this->db->delete('surat_perintah_perjalanan_dinas', ['hash_id' => $hash_id]);
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

  public function get_all_biaya_perjalanan_dinas() {
    return $this->db->get('biaya_perjalanan_dinas')->result_array();
  }

  public function update_status_biaya_perjalanan_dinas($hash_id, $status_code) {
    $this->db->set('status', $status_code);
    $this->db->where('hash_id', $hash_id);
    $this->db->update('biaya_perjalanan_dinas');

    return $this->db->affected_rows();
  }

  public function delete_biaya_perjalanan_dinas($hash_id) {
    return $this->db->delete('biaya_perjalanan_dinas', ['hash_id' => $hash_id]);
  }
}