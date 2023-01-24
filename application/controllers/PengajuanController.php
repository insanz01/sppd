<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PengajuanModel", "pengajuan_m");
  }

  public function surat_perintah_perjalanan_dinas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/pengajuan/surat_perintah_perjalanan_dinas');
    $this->load->view('templates/panel/footer');
  }

  public function add_surat_perintah_perjalanan_dinas() {
    $data = $this->input->post();

    $hash_id = $this->pengajuan_m->insert_surat_perintah_perjalanan_dinas($data);
    if($hash_id) {
      redirect('surat/sppd/' . $hash_id);
    }
  }

  public function surat_perintah_tugas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/surat_perintah_tugas");
    $this->load->view('templates/panel/footer');
  }

  public function add_surat_perintah_tugas() {
    $data = $this->input->post();

    $hash_id = $this->pengajuan_m->insert_surat_perintah_tugas($data);
    if($hash_id) {
      redirect('surat/spt/' . $hash_id);
    }
  }

  public function laporan_perjalanan_dinas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/laporan_perjalanan_dinas");
    $this->load->view('templates/panel/footer');
  }

  public function add_laporan_perjalanan_dinas() {
    $data = $this->input->post();

    $hash_id = $this->pengajuan_m->insert_laporan_perjalanan_dinas($data);
    if($hash_id) {
      redirect('surat/lpd/' . $hash_id);
    }
  }
}