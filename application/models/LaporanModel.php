<?php

class LaporanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_reports($target) {
    switch($target) {
      case "laporan_perjalanan_dinas":
        return $this->get_all_laporan_perjalanan_dinas();
        break;
      case "surat_perintah_perjalanan_dinas":
        return $this->get_all_surat_perintah_perjalanan_dinas();
        break;
      case "surat_perintah_tugas":
        return $this->get_all_surat_perintah_tugas();
        break;
      case "biaya_perjalanan_dinas":
        return $this->get_all_biaya_perjalanan_dinas();
        break;
    }
  }

  public function get_all_laporan_perjalanan_dinas() {
    $query = "SELECT * FROM laporan_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_perjalanan_dinas() {
    $query = "SELECT * FROM surat_perintah_perjalanan_dinas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_surat_perintah_tugas() {
    $query = "SELECT * FROM surat_perintah_tugas";

    return $this->db->query($query)->result_array();
  }

  public function get_all_biaya_perjalanan_dinas() {
    $query = "SELECT b.id, b.hash_id, b.file_dokumen, k.nama as nama_karyawan, b.status FROM biaya_perjalanan_dinas b JOIN karyawan k ON b.user_id = k.user_id ORDER BY b.id DESC";

    $bpd = $this->db->query($query)->result_array();
    $results = [];

    foreach ($bpd as $b) {
      $status = 'initial';

      if($b['status'] == -1) {
        $status = "ditolak";
      } else if($b['status'] == 1) {
        $status = "diterima";
      }

      $result = [
        'id' => $b['id'],
        'hash_id' => $b['hash_id'],
        'file_dokumen' => $b['file_dokumen'],
        'nama_karyawan' => $b['nama_karyawan'],
        'status' => $status,
      ];

      array_push($results, $result);
    }

    return $results;
  }

  public function get_all_biaya_perjalanan_dinas_by_user() {
    $user_id = $this->session->userdata('SESS_SPPD_USERID');
    
    $query = "SELECT b.id, b.hash_id, b.file_dokumen, k.nama as nama_karyawan, b.status FROM biaya_perjalanan_dinas b JOIN karyawan k ON b.user_id = k.user_id WHERE b.user_id = $user_id ORDER BY b.id DESC";

    $bpd = $this->db->query($query)->result_array();
    $results = [];

    foreach ($bpd as $b) {
      $status = 'initial';

      if($b['status'] == -1) {
        $status = "ditolak";
      } else if($b['status'] == 1) {
        $status = "diterima";
      }

      $result = [
        'id' => $b['id'],
        'hash_id' => $b['hash_id'],
        'file_dokumen' => $b['file_dokumen'],
        'nama_karyawan' => $b['nama_karyawan'],
        'status' => $status,
      ];

      array_push($results, $result);
    }

    return $results;
  }
}