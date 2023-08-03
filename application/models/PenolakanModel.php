<?php

class PenolakanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_penolakan_sppd() {
    $query = "SELECT t.id, t.hash_id, t.alasan, s.nomor_SPPD, s.nip_karyawan, s.nama_karyawan FROM tolak_surat_perintah_perjalanan_dinas t JOIN surat_perintah_perjalanan_dinas s ON t.hash_id = s.hash_id";

    return $this->db->query($query)->result_array();
  }
}