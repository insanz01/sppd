<?php

class PenolakanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PenolakanModel", "penolakan_m");
  }

  public function index() {
    $data['penolakan'] = $this->penolakan_m->get_all_penolakan_sppd();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/penolakan/index', $data);
    $this->load->view('templates/panel/footer');
  }
}