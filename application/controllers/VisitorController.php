<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisitorController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model("VisitorModel", "visitor_m");
  }

  public function guest()
  {
    $this->load->view("templates/visitor/header");
    $this->load->view("visitor/guest");
    $this->load->view("templates/visitor/footer");
  }

  public function guest_record()
  {
    $this->form_validation->set_rules("nama", "Name", "required");
    $this->form_validation->set_rules("profesi", "Profession", "required");
    $this->form_validation->set_rules("instansi", "Agency", "required");

    if ($this->form_validation->run() === FALSE) {
      $this->session->set_flashdata("error_message", "Gagal menyimpan buku tamu");
      redirect("visitor");
      return;
    }

    $data = [
      "nama" => $this->input->post("nama"),
      "profesi" => $this->input->post("profesi"),
      "instansi" => $this->input->post("instansi")
    ];

    if ($this->visitor_m->save_guestbook_visitor($data)) {
      $this->session->set_flashdata("success_message", "Selamat Datang " . $data['nama']);
    } else {
      $this->session->set_flashdata("error_message", "Gagal menyimpan buku tamu");
    }

    redirect("visitor");
  }

  public function member()
  {
    $this->load->view("templates/visitor/header");
    $this->load->view("visitor/member");
    $this->load->view("templates/visitor/footer");
  }

  public function member_record()
  {
    $this->form_validation->set_rules("identitas", "Identity", "required");

    if ($this->form_validation->run() === FALSE) {
      $this->session->set_flashdata("error_message", "Gagal menyimpan buku tamu");
      redirect("visitor");
      return;
    }

    $data = [
      "identitas" => $this->input->post("identitas")
    ];

    $result = $this->visitor_m->save_guestbook_member($data);

    if ($result) {
      $this->session->set_flashdata("success_message", "Selamat Datang " . $result['nama_lengkap']);
    } else {
      $this->session->set_flashdata("error_message", "Gagal menyimpan buku tamu");
    }

    redirect("visitor");
  }
}
