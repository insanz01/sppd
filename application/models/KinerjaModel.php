<?php

class KinerjaModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_kinerja() {
    $query = "SELECT NIP_karyawan, nama_karyawan, COUNT(*) as total_perjalanan FROM laporan_perjalanan_dinas WHERE status = 1 GROUP BY (NIP_karyawan) ORDER BY total_perjalanan DESC";

    return $this->db->query($query)->result_array();
  }

  public function get_detail_kinerja($NIP_karyawan) {
    $data = $this->db->get_where("laporan_perjalanan_dinas", ["NIP_karyawan" => $NIP_karyawan])->result_array();

    $result = [];
    foreach($data as $dt) {
      array_push($result, $dt['poin_hasil_kegiatan']);
    }

    return $result;
  }
}