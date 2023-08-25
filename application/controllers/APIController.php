<?php

class APIController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("KaryawanModel", "karyawan_m");
    $this->load->model("HelperModel", "helper_m");
    $this->load->model("RegionalModel", "regional_m");
  }

  public function chart_jabatan() {
    $jabatan = $this->helper_m->get_all_jabatan();

    $data = [
      "data" => $jabatan,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function biaya_sewa($provinsi) {
    $provinsi = str_replace("_", " ", $provinsi);

    $biaya = $this->helper_m->get_biaya_sewa($provinsi);

    $data = [
      "data" => $biaya,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function biaya_taxi($provinsi) {
    $provinsi = str_replace("_", " ", $provinsi);

    $biaya = $this->helper_m->get_biaya_taxi($provinsi);

    $data = [
      "data" => $biaya,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function biaya_harian($provinsi) {
    $provinsi = str_replace("_", " ", $provinsi);

    $biaya = $this->helper_m->get_biaya_harian($provinsi);

    $data = [
      "data" => $biaya,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function biaya_pesawat($kabupaten) {
    $kabupaten = str_replace("_", " ", $kabupaten);

    $biaya = $this->helper_m->get_biaya_pesawat($kabupaten);

    $data = [
      "data" => $biaya,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function biaya_hotel($provinsi) {
    $provinsi = str_replace("_", " ", $provinsi);

    $biaya = $this->helper_m->get_biaya_hotel($provinsi);

    $data = [
      "data" => $biaya,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function sppd($hash_id) {
    $spt = $this->helper_m->get_detail_spt_by_hash($hash_id);

    $sppd = $this->helper_m->get_detail_sppd($spt['nomor_SPPD']);
    
    $data = [
      "data" => [
        "sppd" => $sppd,
        "spt" => $spt
      ],
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function spt($hash_id) {
    $sppd = $this->helper_m->get_detail_sppd_by_hash($hash_id);

    $spt = $this->helper_m->get_detail_spt($sppd['nomor_SPPD']);

    $data = [
      "data" => $spt,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function provinsi() {
    $provinsi = $this->regional_m->get_all_provinsi();

    $data = [
      "data" => $provinsi,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
  }

  public function kabupaten($id_provinsi = null) {
    $kabupaten = $this->regional_m->get_all_kabupaten();

    if($id) {
      $kabupaten = $this->regional_m->get_all_kabupaten_by_provinsi_id($id_provinsi);
    }

    $data = [
      "data" => $kabupaten,
      "success" => true
    ];

    echo json_encode($data, JSON_PRETTY_PRINT);
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
      $perjalanan = $this->helper_m->get_biaya_pesawat_v2($asal, $tujuan);

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