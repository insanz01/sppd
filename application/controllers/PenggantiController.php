<?php

class PenggantiController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PenggantiModel", "pengganti_m");
  }

  public function index() {
    $data['pengganti'] = $this->pengganti_m->get_all_pengganti();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/pengganti/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/pengganti/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add() {
    $data = $this->input->post();

    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('file_dokumen'))
    {
      $file = array('upload_data' => $this->upload->data());
      
      $data['file'] = $file['upload_data']['file_name'];
    }

    if($this->pengganti_m->insert_pengganti($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data</div>');
    }

    redirect("pengganti");
  }
}