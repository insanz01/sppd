<?php

class KwitansiController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    if(!$this->session->userdata("SESS_SPPD_USERID")) {
      redirect('auth/logout');
    }

    $this->load->model("KwitansiModel", "kwitansi_m");
    $this->load->model("KaryawanModel", "karyawan_m");
  }

  public function index() {
    $user_id = $this->session->userdata("SESS_SPPD_USERID");
    $data['kwitansi'] = $this->kwitansi_m->get_all_kwitansi_by_user_id($user_id);
    if($this->session->userdata("SESS_SPPD_ROLEID") == 1) {
      $data['kwitansi'] = $this->kwitansi_m->get_all_kwitansi();
    }

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/kwitansi/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add() {
    $data['karyawan'] = $this->karyawan_m->get_all_karyawan();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/kwitansi/add', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_add() {
    $data = [
      'user_id' => $this->input->post('user_id')
    ];

    $config['upload_path']          = 'uploads/documents/';
    $config['allowed_types']        = 'docx|doc|xlsx|xls|pdf|jpg|jpeg|png';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file_kwitansi'))
    {
      var_dump($this->upload->data());

      $error = array('error' => $this->upload->display_errors());

      var_dump($error); die;
    }
    else
    {
      $dokumenData = array('upload_data' => $this->upload->data());

      $data['file'] = $dokumenData['upload_data']['file_name'];
    }

    if($this->kwitansi_m->insert_kwitansi($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambah kwitansi</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambah kwitansi</div>');
    }

    redirect('kwitansi');
  }

  public function delete($id) {
    // $id = $this->input->post('id');

    if($this->kwitansi_m->delete_kwitansi($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus kwitansi</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gagal menghapus kwitansi</div>');
    }

    redirect("kwitansi");
  }
}