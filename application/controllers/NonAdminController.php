<?php

class NonAdminController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model('PengajuanModel', 'pengajuan_m');
    $this->load->model('LaporanModel', 'laporan_m');
  }

  public function biaya_perjalanan_dinas() {
    $data['file_template'] = "dokumen/template_bpd.xlsx";
    $data['SPPD'] = $this->laporan_m->get_all_surat_perintah_perjalanan_dinas();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/non_admin/biaya_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function laporan_biaya_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_biaya_perjalanan_dinas_by_user();

    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $data['reports'] = $this->laporan_m->get_all_biaya_perjalanan_dinas_by_user_filter($filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/non_admin/laporan_biaya_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_perjalanan_dinas() {
    $data = [
      'user_id' => $this->session->userdata('SESS_SPPD_USERID')
    ];

    $config['upload_path']          = 'uploads/documents/';
    $config['allowed_types']        = 'docx|doc|xlsx|xls|pdf';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file_dokumen'))
    {
      var_dump($this->upload->data());

      $error = array('error' => $this->upload->display_errors());

      var_dump($error); die;
    }
    else
    {
      $dokumenData = array('upload_data' => $this->upload->data());

      $data['file_dokumen'] = $dokumenData['upload_data']['file_name'];
    }

    if($this->pengajuan_m->insert_biaya_perjalanan_dinas($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambah perjalanan dinas</div>');
    }

    redirect('na/bpd');
  }

  public function laporan_perjalanan_dinas() {
    $data['reports'] = $this->laporan_m->get_all_reports_by_user('laporan_perjalanan_dinas');

    $filter_awal = $this->input->post('tanggal_awal');
    $filter_akhir = $this->input->post('tanggal_akhir');
    
    if($filter_awal && $filter_akhir) {
      $filter = [
        'filter_awal' => $filter_awal,
        'filter_akhir' => $filter_akhir
      ];

      $data['reports'] = $this->laporan_m->get_all_reports_by_user_filter('laporan_perjalanan_dinas', $filter);
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/non_admin/laporan_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function delete_biaya_perjalanan_dinas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_biaya_perjalanan_dinas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('na/bpd/laporan');
  }
}