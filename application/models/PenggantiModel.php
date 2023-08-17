<?php

class PenggantiModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_pengganti() {
    return $this->db->get("pengganti_surat_perintah_perjalanan_dinas")->result_array();
  }

  public function get_single_pengganti($hash_id) {
    return $this->db->get_where("pengganti_surat_perintah_perjalanan_dinas", ["hash_id" => $hash_id])->row_array();
  }

  public function insert_pengganti($data) {
    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);

    return $this->db->insert("pengganti_surat_perintah_perjalanan_dinas", $data);
  }

  public function get_all_sppd() {
    return $this->db->get("surat_perintah_perjalanan_dinas")->result_array();
  }
}