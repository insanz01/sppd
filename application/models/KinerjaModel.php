<?php

class KinerjaModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_kinerja() {
    $query = "SELECT NIP_karyawan, nama_karyawan, COUNT(*) as total_perjalanan FROM laporan_perjalanan_dinas WHERE status = 1 GROUP BY (NIP_karyawan) ORDER BY total_perjalanan DESC";

    return $this->db->query($query)->result_array();
  }

  public function update_skor($hash_id, $skor) {
    $this->db->set("skor_penilaian", $skor);
    $this->db->where("hash_id", $hash_id);
    $this->db->update("laporan_perjalanan_dinas");

    return $this->db->affected_rows();
  }

  public function get_detail_kinerja($NIP_karyawan) {
    $data = $this->db->get_where("laporan_perjalanan_dinas", ["NIP_karyawan" => $NIP_karyawan])->result_array();

    $result = [];
    foreach($data as $dt) {

      $keterangan_poin = "";
      switch($dt["skor_penilaian"]) {
        case 1:
          $keterangan_poin = "buruk";
          break;
        case 2:
          $keterangan_poin = "cukup";
          break;
        case 3:
          $keterangan_poin = "baik";
          break;
        case 4:
          $keterangan_poin = "sangat baik";
          break;
        default:
          $keterangan_poin = "belum di-set";
      }

      $temp = [
        "hash_id" => $dt['hash_id'],
        "hasil" => $dt['poin_hasil_kegiatan'],
        "poin" => $keterangan_poin
      ];

      array_push($result, $temp);
    }

    return $result;
  }
}