<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AuthController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

		$this->load->model('AuthModel', 'm_auth');
  }

  public function index()
  {
    if($this->session->has_userdata('SESS_SPPD_USERID')) {
			redirect('dashboard');
		}

		$this->load->view('templates/auth/header');
		$this->load->view('auth/login');
		$this->load->view('templates/auth/footer');
  }

  public function do_login() {
		$data = $this->input->post();

		if($this->m_auth->login($data)) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Login berhasil</div>');

			redirect('dashboard');
		}

		if(!$this->session->flashdata('is_active')) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akun anda belum Aktif<br>Mohon hubungi admin untuk meminta aktivasi</div>');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Kombinasi username dan password tidak tepat</div>');
		}


		redirect('auth');
	}

  public function do_logout()
  {
		$this->session->unset_userdata("SESS_SPPD_USERID");
		$this->session->unset_userdata("SESS_SPPD_USERNAME");

		redirect('auth');
  }
}
