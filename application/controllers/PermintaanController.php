<?php

class PermintaanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PermintaanModel", "permintaan_m");
  }

  public function sppd() {
    $data['sppd'] = $this->permintaan_m->get_permintaan_sppd();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/permintaan/surat_perintah_perjalanan_dinas/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function sppd_approve($id = null) {
    if($this->permintaan_m->approve_sppd($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil setujui data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal setujui data</div>');
    }

    redirect("permintaan/sppd");
  }

  public function sppd_reject($id = null) {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
    // $config['max_size']             = 100;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    $alasan = $this->input->post('alasan');
    
    $data = [
      "hash_id" => $id,
      "alasan" => $alasan
    ];

    // file upload
    if ( ! $this->upload->do_upload('userfile'))
    {
      $file = array('upload_data' => $this->upload->data());

      $data['file'] = $file['upload_data']["file_name"];
    }

    if($this->permintaan_m->reject_sppd($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil membatalkan data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal membatalkan data</div>');
    }

    redirect("permintaan/sppd");
  }
}