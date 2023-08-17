<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if(!$this->session->userdata('SESS_SPPD_USERID')) {
      redirect('auth');
    }

    $this->load->model('AppModel', 'app_m');
  }

  public function index()
  {
    $data['total_bpd'] = $this->app_m->get_total_biaya_perjalanan_dinas();
    $data['total_lpd'] = $this->app_m->get_total_laporan_perjalanan_dinas();
    $data['total_sppd'] = $this->app_m->get_total_surat_perintah_perjalanan_dinas();
    $data['total_spt'] = $this->app_m->get_total_surat_perintah_tugas();
    $data['total_npd'] = $this->app_m->get_total_nota_dinas();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/dashboard', $data);
    $this->load->view('templates/panel/footer');
  }
}
