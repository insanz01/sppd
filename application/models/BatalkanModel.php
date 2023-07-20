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
    $bulan = date("m", time());

    $bulan_romawi = ["", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX", "X", "XI", "XII"];
    $next_number = (string)($nomor_id + 1);
    strlen($next_number);
    
    $nomor = "";
    for($i = 0; $i < (3 - $next_number); $i++) {
      $nomor += "0";
    }

    $nomor += $next_number;

    return "06.$nomor/DKP3-KB/$bulan_rowawi[$bulan]/$tahun";
  }

  public function get_all_sppd() {
    return $this->db->get_where("surat_perintah_perjalanan_dinas", ["status" => 1])->result_array();
  }

  public function batalkan_tugas($data, $spt_hash_id) {
    $this->db->set("status", -1);
    $this->db->where("hash_id", $spt_hash_id);
    $this->db->update("surat_perintah_perjalanan_dinas");

    $hash_id = password_hash(time(), PASSWORD_DEFAULT);

    $data['hash_id'] = base64_encode($hash_id);
    $data['sppd_hash'] = $stp_hash_id;

    $data['nomor_surat'] = $this->generate_nomor_batal_tugas();

    return $this->db->insert("batalkan_perintah_tugas", $data);
  }
}