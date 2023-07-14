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

  public function list_biaya_taxi() {
    $data['biaya'] = $this->biaya_m->get_all_biaya_taxi();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/taxi/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_taxi() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/taxi/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_biaya_taxi() {
    $data = $this->input->post();

    if($this->biaya_m->add_biaya_taxi($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data</div>');
    }

    redirect("biaya/taxi");
  }

  public function edit_biaya_taxi($id) {
    $data['biaya'] = $this->biaya_m->get_single_biaya_taxi($id);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/taxi/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_biaya_taxi($id) {
    $data = $this->input->post();

    if($this->biaya_m->edit_biaya_taxi($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect("biaya/taxi");
  }

  public function delete_biaya_taxi() {
    $id = $this->input->post('id');

    if($this->biaya_m->delete_biaya_taxi($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect("biaya/taxi");
  }

  public function list_biaya_harian() {
    $data['biaya'] = $this->biaya_m->get_all_biaya_harian();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/harian/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_harian() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/harian/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_biaya_harian() {
    $data = $this->input->post();

    if($this->biaya_m->add_biaya_harian($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data</div>');
    }

    redirect("biaya/harian");
  }

  public function edit_biaya_harian($id) {
    $data['biaya'] = $this->biaya_m->get_single_biaya_harian($id);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/harian/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_biaya_harian($id) {
    $data = $this->input->post();

    if($this->biaya_m->edit_biaya_harian($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect("biaya/harian");
  }

  public function delete_biaya_harian() {
    $id = $this->input->post('id');

    if($this->biaya_m->delete_biaya_harian($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect("biaya/harian");
  }

  public function list_biaya_harian_dki() {
    $data['biaya'] = $this->biaya_m->get_all_biaya_harian_dki();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/harian_dki/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_harian_dki() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/harian_dki/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_biaya_harian_dki() {
    $data = $this->input->post();

    if($this->biaya_m->add_biaya_harian_dki($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data</div>');
    }

    redirect("biaya/harian_dki");
  }

  public function edit_biaya_harian_dki($id) {
    $data['biaya'] = $this->biaya_m->get_single_biaya_harian_dki($id);

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/biaya/harian_dki/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_biaya_harian_dki($id) {
    $data = $this->input->post();

    if($this->biaya_m->edit_biaya_harian_dki($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect("biaya/harian_dki");
  }

  public function delete_biaya_harian_dki() {
    $id = $this->input->post('id');

    if($this->biaya_m->delete_biaya_harian_dki($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect("biaya/harian_dki");
  }
}

