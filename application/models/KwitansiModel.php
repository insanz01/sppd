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
    $query = "SELECT kw.id, kw.file, kw.user_id, k.NIP, k.nama, k.email, k.nomor_hp FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id ORDER BY kw.created_at DESC";

    return $this->db->query($query)->result_array();
  }

  public function get_all_kwitansi_by_user_id($user_id) {
    $query = "SELECT kw.id, kw.file, kw.user_id, k.NIP, k.nama, k.email, k.nomor_hp FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id WHERE kw.user_id = $user_id ORDER BY kw.created_at DESC";

    return $this->db->query($query)->result_array();
  }

  public function get_single_kwitansi($id) {
    $query = "SELECT kw.id, kw.file, kw.user_id, k.NIP, k.nama, k.email, k.nomor_hp FROM karyawan k JOIN kwitansi kw ON k.user_id = kw.user_id WHERE kw.id = $id";

    return $this->db->query($query)->row_array();
  }

  public function delete_kwitansi($id) {
    return $this->db->delete('kwitansi', ['id' => $id]);
  }
}