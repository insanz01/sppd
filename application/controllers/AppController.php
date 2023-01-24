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
  }

  public function index()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/dashboard');
    $this->load->view('templates/panel/footer');
  }
}
