<?php

class APIController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("KaryawanModel", "karyawan_m");
    $this->load->model("HelperModel", "helper_m");
  }

  public function karyawan_by_NIP($nip) {
    if($nip != "") {
      $karyawan = $this->karyawan_m->get_by_NIP($nip);
  
      $data = [
        'data' => $karyawan,
        'success' => true
      ];
  
      echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
      $data = [
        'data' => null,
        'success' => false
      ];
      echo json_encode($data, JSON_PRETTY_PRINT);
    }
  }

  public function beban_anggaran_pesawat($kelas, $asal, $tujuan) {
    if($asal == "" || $tujuan == "") {
      $data = [
        "data" => [
          "biaya" => 0,
        ],
        "success" => false
      ];

      echo json_encode($data, JSON_PRETTY_PRINT);
    } else {
      $perjalanan = $this->helper_m->get_biaya_pesawat($asal, $tujuan);

      $biaya = 0;
      if($kelas == "EKONOMI") {
        $biaya = $perjalanan['kelas_ekonomi'];
      } else if($kelas == "BISNIS") {
        $biaya = $perjalanan['kelas_bisnis'];
      }

      $data = [
        "data" => [
          "biaya" => $biaya,
        ],
        "success" => true
      ];

      echo json_encode($data, JSON_PRETTY_PRINT);
    }
  }
}