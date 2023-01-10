<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model("LogModel", "log_m");
  }

  // pengembalian buku
  public function log_masuk()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/log/masuk');
    $this->load->view('templates/panel/footer');
  }

  public function add_log_masuk()
  {
    $data = $this->input->post();

    $this->log_m->add_log_masuk($data);
  }

  // peminjaman buku
  public function log_keluar()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/log/keluar');
    $this->load->view('templates/panel/footer');
  }

  public function add_log_keluar()
  {
    $data = $this->input->post();

    $this->log_m->add_log_keluar($data);
  }
}
