<?php

class LaporanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("LaporanModel", "laporan_m");
  }

  public function laporan_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports('laporan_perjalanan_dinas');

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/laporan_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function surat_perintah_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports('surat_perintah_perjalanan_dinas');

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/surat_perintah_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function surat_perintah_tugas() {
    $data['reports'] = $this->laporan_m->get_all_reports('surat_perintah_tugas');

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/surat_perintah_tugas', $data);
    $this->load->view('templates/panel/footer');
  }
}