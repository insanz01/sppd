<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NPPDController extends CI_Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/nppd/index');
    $this->load->view('templates/panel/footer');
  }

  public function add() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/nppd/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add() {
    $data = $this->input->post();

    var_dump($data); die;

    redirect('nppd/index');
  }

  public function report() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/report/nppd/index');
    $this->load->view('templates/panel/footer');
  }

  public function edit($id) {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/nppd/edit');
    $this->load->view('templates/panel/footer');
  }

  public function do_edit() {
    $all_data = $this->input->post();
    $id = $all_data['id'];

    unset($all_data['id']);

    $data = $all_data;

    var_dump($data); die;

    redirect('nppd/report');
  }

  public function delete() {
    $id = $this->input->post('id');

    var_dump($id); die;

    redirect('nppd/report');
  }
}