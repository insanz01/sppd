<?php

class APIController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("KaryawanModel", "karyawan_m");
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
}