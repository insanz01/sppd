<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    if(!$this->session->userdata('SESS_SPPD_USERID')) {
      redirect('auth');
    }

    $this->load->model("PengajuanModel", "pengajuan_m");
    $this->load->model("LaporanModel", "laporan_m");
  }

  public function surat_perintah_perjalanan_dinas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/pengajuan/surat_perintah_perjalanan_dinas');
    $this->load->view('templates/panel/footer');
  }

  public function edit_surat_perintah_perjalanan_dinas($hash_id) {
    $data['laporan'] = $this->laporan_m->get_single_surat_perintah_perjalanan_dinas($hash_id);
    $data['hash_id'] = $hash_id;
    
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/edit_surat_perintah_perjalanan_dinas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_surat_perintah_perjalanan_dinas($hash_id) {
    $data = $this->input->post();

    if($this->pengajuan_m->edit_surat_perintah_perjalanan_dinas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect('laporan/spt');
  }

  public function delete_surat_perintah_perjalanan_dinas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_surat_perintah_perjalanan_dinas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('laporan/spt');
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

  public function edit_surat_perintah_tugas($hash_id) {
    $data['laporan'] = $this->laporan_m->get_single_surat_perintah_tugas($hash_id);
    $data['hash_id'] = $hash_id;
    
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/edit_surat_perintah_tugas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_surat_perintah_tugas($hash_id) {
    $data = $this->input->post();

    if($this->pengajuan_m->edit_surat_perintah_tugas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect('laporan/spt');
  }

  public function delete_surat_perintah_tugas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_surat_perintah_tugas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('laporan/spt');
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
      redirect("laporan/lpd");
      // redirect('surat/lpd/' . $hash_id);
    }
  }

  public function delete_laporan_perjalanan_dinas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_laporan_perjalanan_dinas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('laporan/spt');
  }

  public function status_biaya_perjalanan_dinas($hash_id, $status) {
    $status_code = ($status == "terima") ? 1 : -1;

    if($this->pengajuan_m->update_status_biaya_perjalanan_dinas($hash_id, $status_code)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah status</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah status</div>');
    }

    redirect('laporan/bpd');
  }

  // public function biaya_perjalanan_dinas() {
  //   $this->load->view('templates/panel/header');
  //   $this->load->view('templates/panel/sidebar');
  //   $this->load->view('templates/panel/navbar');
  //   $this->load->view("app/pengajuan/biaya_perjalanan_dinas");
  //   $this->load->view('templates/panel/footer');
  // }

  // public function add_biaya_perjalanan_dinas() {
  //   $data = $this->input->post();

  //   $hash_id = $this->pengajuan_m->insert_biaya_perjalanan_dinas($data);
  //   if($hash_id) {
  //     redirect('surat/bpd/' . $hash_id);
  //   }
  // }
}