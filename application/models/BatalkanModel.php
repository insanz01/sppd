<?php

class BatalkanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  private function generate_nomor_batal_tugas() {
    $query = "SELECT id FROM batalkan_perintah_tugas ORDER BY id DESC LIMIT 1";
    $nomor_surat = $this->db->query($query)->row_array();

    $nomor_id = 0;
    if($nomor_surat) {
      $nomor_id = $nomor_surat['id'];
    }

    $tahun = date("Y", time());
    $bulan = intval(date("m", time()));

    $bulan_romawi = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII"];
    $next_number = (string)($nomor_id + 1);
    $lenNumber = strlen($next_number);
    
    $nomor = "";
    for($i = 0; $i < (3 - $next_number); $i++) {
      $nomor .= (string)"0";
    }

    $nomor .= $next_number;

    return "06.$nomor/DKP3-KB/$bulan_romawi[$bulan]/$tahun";
  }

  public function get_all_sppd() {
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas WHERE status = -1 AND hash_id NOT IN (SELECT sppd_hash FROM batalkan_perintah_tugas)";

    return $this->db->query($query)->result_array();
  }
  
  public function get_single_sppd($hash_sppd) {
    return $this->db->get_where("surat_perintah_perjalanan_dinas", ["hash_id" => $hash_sppd])->row_array();
  }

  public function get_all_pembatalan_sppd() {
    $batalkan = $this->db->get("batalkan_perintah_tugas")->result_array();

    $results = [];

    foreach($batalkan as $b) {
      $sppd = $this->db->get_where("surat_perintah_perjalanan_dinas", ["status" => -1, "hash_id" => $b['sppd_hash']])->row_array();

      array_push($results, $sppd);
    }

    return $results;
  }
  
  public function get_all_pembatalan_sppd_with_NIP($NIP) {
    $batalkan = $this->db->get_where("batalkan_perintah_tugas", ["nip_pegawai" => $NIP])->result_array();

    $results = [];

    foreach($batalkan as $b) {
      $sppd = $this->db->get_where("surat_perintah_perjalanan_dinas", ["status" => -1, "hash_id" => $b['sppd_hash']])->row_array();

      array_push($results, $sppd);
    }

    return $results;
  }

  public function batalkan_perintah_tugas($data, $sppd_hash_id) {
    $this->db->set("status", -1);
    $this->db->where("hash_id", $sppd_hash_id);
    $this->db->update("surat_perintah_perjalanan_dinas");

    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);
    $data['sppd_hash'] = $sppd_hash_id;

    $data['nomor_surat'] = $this->generate_nomor_batal_tugas();

    return $this->db->insert("batalkan_perintah_tugas", $data);
  }
}