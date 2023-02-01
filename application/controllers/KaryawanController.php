<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KaryawanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    if(!$this->session->userdata('SESS_SPPD_USERID')) {
      redirect('auth');
    }

    $this->load->model("KaryawanModel", "karyawan_m");
  }

  public function index()
  {
    $data['karyawan'] = $this->karyawan_m->get_all_karyawan();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/karyawan/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_karyawan()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/karyawan/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_karyawan()
  {
    $data = $this->input->post();

    if ($this->karyawan_m->save_karyawan($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data karyawan</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data karyawan</div>');
    }

    redirect('karyawan');
  }

  public function edit_karyawan($id)
  {
    $data['k'] = $this->karyawan_m->get_single_karyawan($id);
    $data['id'] = $id;

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/karyawan/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_update_karyawan()
  {
    $id = $this->input->post('id');
    $data = [
      'nama' => $this->input->post("nama"),
      'NIP' => $this->input->post("NIP"),
      'alamat' => $this->input->post("alamat"),
      'nomor_hp' => $this->input->post("nomor_hp"),
      'email' => $this->input->post("email"),
      'jabatan' => $this->input->post("jabatan")
    ];

    if ($this->karyawan_m->update_karyawan($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data karyawan</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data karyawan</div>');
    }

    redirect('karyawan');
  }

  public function delete_karyawan()
  {
    $id = $this->input->post('id');

    if ($this->karyawan_m->delete_karyawan($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data karyawan</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data karyawan</div>');
    }

    redirect('karyawan');
  }
}