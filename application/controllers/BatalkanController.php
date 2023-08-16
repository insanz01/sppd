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

  public function add($sppd_hash) {
    $single_sppd = $this->batalkan_m->get_single_sppd($sppd_hash);
    $data['batalkan'] = $single_sppd;
    $data['hash_id'] = $sppd_hash;
    // $data['karyawan'] = $this->batalkan_m->get_single_karyawan($single_sppd['nip_karyawan']);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/batalkan/sppd/add', $data);
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
    $this->load->view('app/batalkan/sppd/riwayat', $data);
    $this->load->view('templates/panel/footer');
  }

  public function riwayat_na() {
    $NIP = $this->session->userdata("SESS_SPPD_NIP");
    
    $data['batalkan'] = $this->batalkan_m->get_all_pembatalan_sppd_with_NIP($NIP);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/batalkan/sppd/riwayat', $data);
    $this->load->view('templates/panel/footer');
  }
}