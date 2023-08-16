<?php

class PengajuanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  private function generate_nomor_SPPD() {
    $query = "SELECT id FROM surat_perintah_tugas ORDER BY id DESC LIMIT 1";
    $exist_sppd = $this->db->query($query)->row_array();

    $nomor_id = 0;
    if($exist_sppd) {
      $nomor_id = $exist_sppd['id'];
    }

    $tahun = date("Y", time());
    $bulan = intval(date("m", time()));

    $bulan_romawi = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII"];
    $next_number = (string)($nomor_id + 1);
    $lenNumber = strlen($next_number);
    
    $nomor = "";
    for($i = 0; $i < (3 - $lenNumber); $i++) {
      $nomor .= "0";
    }

    $nomor .= $next_number;

    return "12.$nomor/DKP3-KB/$bulan_romawi[$bulan]/$tahun";
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

  public function update_status_laporan_perjalanan_dinas($hash_id, $status_code) {
    $this->db->set('status', $status_code);
    $this->db->where('hash_id', $hash_id);
    $this->db->update('laporan_perjalanan_dinas');

    return $this->db->affected_rows();
  }

  public function insert_surat_perintah_tugas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);
    $data['nomor_SPPD'] = $this->generate_nomor_SPPD();

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

  public function insert_nota_dinas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);

    $this->db->insert("nota_dinas", $data);
    return $data['hash_id'];
  }

  public function get_nota_dinas($hash_id) {
    return $this->db->get_where('nota_dinas', ['hash_id' => $hash_id])->row_array();
  }

  public function edit_nota_dinas($data, $hash_id) {
    $this->db->set($data);
    $this->db->where('hash_id', $hash_id);
    $this->db->update('nota_dinas');

    return $this->db->affected_rows();
  }

  public function delete_nota_dinas($hash_id) {
    return $this->db->delete('nota_dinas', ["hash_id" => $hash_id]);
  }
  
  public function insert_surat_perintah_perjalanan_dinas($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);
    // $data['nomor_SPPD'] = $this->generate_nomor_SPPD();

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

  public function get_surat_pembatalan_tugas_perjalanan_dinas($hash_id) {
    return $this->db->get('batalkan_perintah_tugas', ['sppd_hash' => $hash_id])->row_array();
  }

  // bulk
  public function get_bulk_laporan_perjalanan_dinas() {
    return $this->db->get_where('laporan_perjalanan_dinas')->result_array();
  }

  public function get_bulk_biaya_perjalanan_dinas() {
    return $this->db->get_where('biaya_perjalanan_dinas')->result_array();
  }

  public function get_bulk_surat_perintah_perjalanan_dinas() {
    return $this->db->get_where('surat_perintah_perjalanan_dinas')->result_array();
  }

  public function get_bulk_surat_perintah_tugas() {
    return $this->db->get_where('surat_perintah_tugas')->result_array();
  }

  // list
  public function get_list_laporan_perjalanan_dinas($filter) {
    if($filter['filter_awal'] && $filter['filter_akhir']) {
      $query = "SELECT * FROM laporan_perjalanan_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

      return $this->db->query($query)->result_array();
    }

    return $this->db->get_where('laporan_perjalanan_dinas')->result_array();
  }

  public function get_list_biaya_perjalanan_dinas($filter) {
    if($filter['filter_awal'] && $filter['filter_akhir']) {
      $query = "SELECT * FROM biaya_perjalanan_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

      return $this->db->query($query)->result_array();
    }

    return $this->db->get_where('biaya_perjalanan_dinas')->result_array();
  }

  public function get_list_surat_perintah_perjalanan_dinas($filter) {
    if($filter['filter_awal'] && $filter['filter_akhir']) {
      $query = "SELECT * FROM surat_perintah_perjalanan_dinas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

      return $this->db->query($query)->result_array();
    }

    return $this->db->get_where('surat_perintah_perjalanan_dinas')->result_array();
  }

  public function get_list_surat_perintah_tugas($filter) {
    if($filter['filter_awal'] && $filter['filter_akhir']) {
      $query = "SELECT * FROM surat_perintah_tugas WHERE DATE(created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(created_at) = '$filter[filter_awal]' OR DATE(created_at) = '$filter[filter_akhir]'";

      return $this->db->query($query)->result_array();
    }

    return $this->db->get_where('surat_perintah_tugas')->result_array();
  }
}