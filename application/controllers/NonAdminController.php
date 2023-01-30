<?php

class NonAdminController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model('PengajuanModel', 'pengajuan_m');
    $this->load->model('LaporanModel', 'laporan_m');
  }

  public function biaya_perjalanan_dinas() {
    $data['file_template'] = "dokumen/template_kwitansi_dan_bpd.xlsx";

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/non_admin/biaya_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function laporan_biaya_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_biaya_perjalanan_dinas_by_user();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/non_admin/laporan_biaya_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_perjalanan_dinas() {
    $data = [
      'users_id' => $this->session->userdata('SESS_SPPD_USERID')
    ];

    $config['upload_path']          = './uploads/documents/';
    $config['allowed_types']        = 'xlsx|docs|docx|doc|xls';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file_dokumen'))
    {
      $error = array('error' => $this->upload->display_errors());

      var_dump($error); die;
    }
    else
    {
      $imageData = array('upload_data' => $this->upload->data());

      $data['file_dokumen'] = $imageData['upload_data']['file_name'];
    }

    if($this->pengajuan_m->insert_biaya_perjalanan_dinas($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambah perjalanan dinas</div>');
    }

    redirect('na/bpd');
  }
}