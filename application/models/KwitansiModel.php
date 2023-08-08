<?php

class KwitansiModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function insert_kwitansi($data) {
    $this->db->insert("kwitansi", $data);
    return $this->db->insert_id();
  }

  public function get_all_kwitansi() {
    $query = "SELECT kw.id, kw.file, kw.user_id, k.NIP, k.nama, k.email, k.nomor_hp, sppd.nomor_SPPD FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id JOIN surat_perintah_perjalanan_dinas sppd ON sppd.nip_karyawan = k.NIP ORDER BY kw.created_at DESC";

    return $this->db->query($query)->result_array();
  }

  public function get_all_kwitansi_filter($filter) {
    $query = "SELECT kw.id, kw.file, kw.user_id, kw.file_type, k.NIP, k.nama, k.email, k.nomor_hp, sppd.nomor_SPPD FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id JOIN surat_perintah_perjalanan_dinas sppd ON sppd.nip_karyawan = k.NIP WHERE DATE(kw.created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(kw.created_at) = '$filter[filter_awal]' OR DATE(kw.created_at) = '$filter[filter_akhir]'";

    return $this->db->query($query)->result_array();
  }

  public function get_all_kwitansi_by_user_id($user_id) {
    $query = "SELECT kw.id, kw.file, kw.user_id, kw.file_type, k.NIP, k.nama, k.email, k.nomor_hp, kw.nomor_SPPD FROM kwitansi kw JOIN karyawan k ON kw.user_id = k.user_id WHERE kw.user_id = $user_id ORDER BY kw.created_at DESC";

    return $this->db->query($query)->result_array();
  }

  public function get_single_kwitansi($id) {
    $query = "SELECT kw.id, kw.file, kw.user_id, kw.file_type, k.NIP, k.nama, k.email, k.nomor_hp, sppd.nomor_SPPD FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id JOIN surat_perintah_perjalanan_dinas sppd ON sppd.nip_karyawan = k.NIP WHERE kw.id = $id";

    return $this->db->query($query)->row_array();
  }

  public function get_user_id_by_nomor_SPPD($nomor_SPPD) {
    $query = "SELECT users.id as user_id FROM users JOIN karyawan ON users.id = karyawan.user_id JOIN surat_perintah_perjalanan_dinas ON karyawan.NIP = surat_perintah_perjalanan_dinas.nip_karyawan WHERE surat_perintah_perjalanan_dinas.nomor_SPPD = '$nomor_SPPD'";
    return $this->db->query($query)->row_array();
  }

  public function delete_kwitansi($id) {
    return $this->db->delete('kwitansi', ['id' => $id]);
  }

  public function get_all_karyawan() {
    $query = "SELECT k.id, k.NIP, k.nama, k.email, k.nomor_hp, sppd.nomor_SPPD FROM karyawan k JOIN surat_perintah_perjalanan_dinas sppd ON sppd.nip_karyawan = k.NIP ORDER BY sppd.created_at DESC";

    return $this->db->query($query)->result_array();
  }

  public function get_list_penyerahan_bpd($filter) {
    if($filter['filter_awal'] && $filter['filter_akhir']) {
      $query = "SELECT kw.id, kw.file, kw.user_id, k.NIP, k.nama, k.email, k.nomor_hp, sppd.nomor_SPPD FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id JOIN surat_perintah_perjalanan_dinas sppd ON sppd.nip_karyawan = k.NIP WHERE DATE(kw.created_at) BETWEEN '$filter[filter_awal]' AND '$filter[filter_akhir]' OR DATE(kw.created_at) = '$filter[filter_awal]' OR DATE(kw.created_at) = '$filter[filter_akhir]' ORDER BY kw.created_at DESC";

      return $this->db->query($query)->result_array();
    }

    return $this->get_all_kwitansi();
  }
}