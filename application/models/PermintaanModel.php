<?php

class PermintaanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_permintaan_sppd() {
    $NIP = $this->session->userdata('SESS_SPPD_NIP');
    
    return $this->db->get_where("surat_perintah_perjalanan_dinas", ["nip_karyawan" => $NIP])->result_array();
  }

  public function approve_sppd($hash_id) {
    $this->db->set("status", 1);
    $this->db->where("hash_id", $hash_id);
    $this->db->update("surat_perintah_perjalanan_dinas");

    return $this->db->affected_rows();
  }

  public function reject_sppd($data) {
    $this->db->set("status", -1);
    $this->db->where("hash_id", $data['hash_id']);
    $this->db->update("surat_perintah_perjalanan_dinas");

    $sppd = $this->db->get_where("surat_perintah_perjalanan_dinas", ["hash_id" => $data['hash_id']])->row_array();

    $this->db->set("status", -1);
    $this->db->where("nomor_SPPD", $sppd['nomor_SPPD']);
    $this->db->update("surat_perintah_tugas");
    
    return $this->db->insert("tolak_surat_perintah_perjalanan_dinas", $data);
  }
}