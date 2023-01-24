<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanController extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function surat_perintah_perjalanan_dinas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/pengajuan/surat_perintah_perjalanan_dinas');
    $this->load->view('templates/panel/footer');
  }

  public function surat_perintah_tugas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/surat_perintah_tugas");
    $this->load->view('templates/panel/footer');
  }

  public function laporan_perjalanan_dinas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/laporan_perjalanan_dinas");
    $this->load->view('templates/panel/footer');
  }
}