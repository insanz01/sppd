<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MembershipController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('MembershipModel', 'membership_m');
  }

  public function index()
  {
    $data['memberships'] = $this->membership_m->get_all_memberships();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/membership/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_membership()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/membership/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_membership()
  {
    $data = $this->input->post();

    if ($this->membership_m->save_membership($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data membership</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data membership</div>');
    }

    redirect('membership');
  }

  public function edit_membership($id)
  {
    $data['membership'] = $this->membership_m->get_single_membership($id);
    $data['id'] = $id;

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/membership/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_update_membership()
  {
    $id = $this->input->post('id');
    $data = [
      'nama_lengkap' => $this->input->post("nama_lengkap"),
      'no_identitas' => $this->input->post("no_identitas"),
      'alamat' => $this->input->post("alamat"),
      'nomor_hp' => $this->input->post("nomor_hp"),
      'email' => $this->input->post("email")
    ];

    if ($this->membership_m->update_membership($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data membership</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data membership</div>');
    }

    redirect('membership');
  }

  public function delete_membership()
  {
    $id = $this->input->post('id');

    if ($this->membership_m->delete_membership($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data membership</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data membership</div>');
    }

    redirect('membership');
  }
}
