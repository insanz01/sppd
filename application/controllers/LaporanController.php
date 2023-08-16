<?php

class LaporanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("LaporanModel", "laporan_m");
  }

  public function laporan_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports('laporan_perjalanan_dinas');

    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $this->session->set_userdata("FILTER_AWAL", $filter_awal);
      $this->session->set_userdata("FILTER_AKHIR", $filter_akhir);

      $data['reports'] = $this->laporan_m->get_all_reports_filter('laporan_perjalanan_dinas', $filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/laporan_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function surat_perintah_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports('surat_perintah_perjalanan_dinas');

    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $this->session->set_userdata("FILTER_AWAL", $filter_awal);
      $this->session->set_userdata("FILTER_AKHIR", $filter_akhir);

      $data['reports'] = $this->laporan_m->get_all_reports_filter('surat_perintah_perjalanan_dinas', $filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/surat_perintah_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function surat_perintah_tugas() {
    $data['reports'] = $this->laporan_m->get_all_reports('surat_perintah_tugas');

    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $this->session->set_userdata("FILTER_AWAL", $filter_awal);
      $this->session->set_userdata("FILTER_AKHIR", $filter_akhir);

      $data['reports'] = $this->laporan_m->get_all_reports_filter('surat_perintah_tugas', $filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/surat_perintah_tugas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function biaya_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports('biaya_perjalanan_dinas');
    
    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $this->session->set_userdata("FILTER_AWAL", $filter_awal);
      $this->session->set_userdata("FILTER_AKHIR", $filter_akhir);

      $data['reports'] = $this->laporan_m->get_all_reports_filter('biaya_perjalanan_dinas', $filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/biaya_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function nota_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports('nota_dinas');
    
    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $this->session->set_userdata("FILTER_AWAL", $filter_awal);
      $this->session->set_userdata("FILTER_AKHIR", $filter_akhir);

      $data['reports'] = $this->laporan_m->get_all_reports_filter('nota_dinas', $filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/nota_dinas', $data);
    $this->load->view('templates/panel/footer');
  }
}