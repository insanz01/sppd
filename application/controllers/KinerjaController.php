<?php

class KinerjaController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("KinerjaModel", "kinerja_m");
    $this->load->model("KaryawanModel", "karyawan_m");
  }

  public function index() {
    $data['kinerja'] = $this->kinerja_m->get_all_kinerja();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/kinerja/pegawai/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function detail($NIP) {
    $data['info'] = $this->karyawan_m->get_by_NIP($NIP);
    $data['detail'] = $this->kinerja_m->get_detail_kinerja($NIP);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/kinerja/pegawai/detail', $data);
    $this->load->view('templates/panel/footer');
  }

  public function update_skor() {
    $data = $this->input->post();
    
    if($this->kinerja_m->update_skor($data['hash_id'], $data['skor'])) {
      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil mengubah skor!</div>");
    } else {
      $this->session->set_flashdata("pesan", "<div class='alert alert-danger' role='alert'>Gagal mengubah skor!</div>");
    }

    redirect("kinerja/detail/" . $data['NIP']);
  }
}