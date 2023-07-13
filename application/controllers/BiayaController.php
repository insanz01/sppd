<?php

class BiayaController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("BiayaModel", "biaya_m");
  }

  public function list_biaya_pesawat() {
    $data['biaya'] = $this->biaya_m->get_all_biaya_pesawat();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/pesawat/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_pesawat() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/pesawat/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_biaya_pesawat() {
    $data = $this->input->post();

    if($this->biaya_m->add_biaya_pesawat($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data</div>');
    }

    redirect("biaya/pesawat");
  }

  public function edit_biaya_pesawat($id) {
    $data['biaya'] = $this->biaya_m->get_single_biaya_pesawat($id);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/pesawat/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_biaya_pesawat($id) {
    $data = $this->input->post();

    if($this->biaya_m->edit_biaya_pesawat($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect("biaya/pesawat");
  }

  public function delete_biaya_pesawat() {
    $id = $this->input->post('id');

    if($this->biaya_m->delete_biaya_pesawat($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect("biaya/pesawat");
  }
}