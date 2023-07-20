<?php

class BatalkanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("BatalkanModel", "batalkan_m");
  }

  public function index() {
    $data['batalkan'] = $this->batalkan_m->get_all_sppd();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/batalkan/sppd/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_batal($hash_id) {
    $data = $this->input->post();
    
    if($this->batalkan_m->batalkan_perintah_tugas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil membatalkan tugas</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal membatalkan tugas</div>');
    }

    redirect('batalkan/sppd');
  }

  public function riwayat() {
    $data['batalkan'] = $this->batalkan_m->get_all_pembatalan_sppd();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/batalkan/sppd/index');
    $this->load->view('templates/panel/footer');
  }
}