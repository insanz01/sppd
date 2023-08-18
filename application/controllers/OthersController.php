<?php

class OthersController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("OthersModel", "other_m");
  }

  public function print_biaya_pesawat() {
    $data['all_surat'] = $this->other_m->get_biaya_pesawat();

    $this->load->view("app/print/biaya_pesawat", $data);
  }

  public function print_biaya_harian() {
    $data['all_surat'] = $this->other_m->get_biaya_harian();

    $this->load->view("app/print/biaya_harian", $data);
  }

  public function print_biaya_sewa() {
    $data['all_surat'] = $this->other_m->get_biaya_sewa();

    $this->load->view("app/print/biaya_sewa", $data);
  }

  public function print_biaya_hotel() {
    $data['all_surat'] = $this->other_m->get_biaya_hotel();

    $this->load->view("app/print/biaya_hotel", $data);
  }

  public function print_biaya_taxi() {
    $data['all_surat'] = $this->other_m->get_biaya_taxi();

    $this->load->view("app/print/biaya_taxi", $data);
  }

  public function print_riwayat_penolakan() {
    $data['all_surat'] = $this->other_m->get_riwayat_penolakan();

    $this->load->view("app/print/riwayat_penolakan", $data);
  }

  public function print_karyawan() {
    $data['all_surat'] = $this->other_m->get_all_karyawan();

    $this->load->view("app/print/karyawan", $data);
  }

  public function print_penolakan() {
    $data['all_surat'] = $this->other_m->get_all_penolakan();

    var_dump($data['all_surat']);

    $this->load->view("app/print/penolakan", $data);
  }

  public function print_pengganti() {
    $data['all_surat'] = $this->other_m->get_all_pengganti();

    $this->load->view("app/print/pengganti_sppd", $data);
  }

  public function print_kinerja_detail($NIP) {
    $data['all_surat'] = $this->other_m->get_all_kinerja_detail($NIP);

    $this->load->view("app/print/kinerja_detail", $data);
  }
}