<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengajuanController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    if(!$this->session->userdata('SESS_SPPD_USERID')) {
      redirect('auth');
    }

    $this->load->model("PengajuanModel", "pengajuan_m");
    $this->load->model("LaporanModel", "laporan_m");
    $this->load->model("KaryawanModel", "karyawan_m");
  }

  public function surat_perintah_perjalanan_dinas() {
    $data['karyawan'] = $this->karyawan_m->get_all_karyawan();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/pengajuan/surat_perintah_perjalanan_dinas', $data);
    $this->load->view('templates/panel/footer');
  }

  public function edit_surat_perintah_perjalanan_dinas($hash_id) {
    $data['laporan'] = $this->laporan_m->get_single_surat_perintah_perjalanan_dinas($hash_id);
    $data['hash_id'] = $hash_id;
    
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/edit_surat_perintah_perjalanan_dinas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_surat_perintah_perjalanan_dinas($hash_id) {
    $data = $this->input->post();

    if($this->pengajuan_m->edit_surat_perintah_perjalanan_dinas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect('laporan/spt');
  }

  public function delete_surat_perintah_perjalanan_dinas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_surat_perintah_perjalanan_dinas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('laporan/spt');
  }

  public function add_surat_perintah_perjalanan_dinas() {
    $data = $this->input->post();

    $hash_id = $this->pengajuan_m->insert_surat_perintah_perjalanan_dinas($data);
    if($hash_id) {
      redirect('surat/sppd/' . $hash_id);
    }
  }

  public function surat_perintah_tugas() {
    $data['SPPD'] = $this->laporan_m->get_all_surat_perintah_perjalanan_dinas();

    $data['karyawan'] = $this->karyawan_m->get_all_karyawan();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/surat_perintah_tugas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_surat_perintah_tugas() {
    $data = $this->input->post();

    $hash_id = $this->pengajuan_m->insert_surat_perintah_tugas($data);
    if($hash_id) {
      redirect('surat/spt/' . $hash_id);
    }
  }

  public function edit_surat_perintah_tugas($hash_id) {
    $data['laporan'] = $this->laporan_m->get_single_surat_perintah_tugas($hash_id);
    $data['hash_id'] = $hash_id;
    
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/edit_surat_perintah_tugas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_surat_perintah_tugas($hash_id) {
    $data = $this->input->post();

    if($this->pengajuan_m->edit_surat_perintah_tugas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect('laporan/spt');
  }

  public function delete_surat_perintah_tugas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_surat_perintah_tugas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('laporan/spt');
  }

  public function laporan_perjalanan_dinas() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/laporan_perjalanan_dinas");
    $this->load->view('templates/panel/footer');
  }

  public function add_laporan_perjalanan_dinas() {
    $data = $this->input->post();
    $user_id = $this->session->userdata("SESS_SPPD_USERID");

    $karyawan = $this->karyawan_m->get_single_karyawan_by_user_id($user_id);

    $data['nama_karyawan'] = $karyawan['nama'];
    $data['NIP_karyawan'] = $karyawan['NIP'];

    $hash_id = $this->pengajuan_m->insert_laporan_perjalanan_dinas($data);
    if($hash_id) {
      redirect("na/lpd");
      // redirect('surat/lpd/' . $hash_id);
    }
  }

  public function edit_laporan_perjalanan_dinas($hash_id) {
    $data['laporan'] = $this->laporan_m->get_single_laporan_perjalanan_dinas($hash_id);
    $data['hash_id'] = $hash_id;
    
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/edit_laporan_perjalanan_dinas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_laporan_perjalanan_dinas($hash_id) {
    $data = $this->input->post();

    if($this->pengajuan_m->edit_laporan_perjalanan_dinas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect('laporan/lpd');
  }

  public function delete_laporan_perjalanan_dinas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_laporan_perjalanan_dinas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('na/lpd');
  }

  public function status_laporan_perjalanan_dinas($hash_id, $status) {
    $status_code = ($status == "terima") ? 1 : -1;

    if($this->pengajuan_m->update_status_laporan_perjalanan_dinas($hash_id, $status_code)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah status</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah status</div>');
    }

    redirect('laporan/lpd');
  }

  public function status_biaya_perjalanan_dinas($hash_id, $status) {
    $status_code = ($status == "terima") ? 1 : -1;

    if($this->pengajuan_m->update_status_biaya_perjalanan_dinas($hash_id, $status_code)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil merubah status</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal merubah status</div>');
    }

    redirect('laporan/bpd');
  }

  public function delete_biaya_perjalanan_dinas($hash_id) {
    // $hash_id = $this->input->post('hash_id');
    if($this->pengajuan_m->delete_biaya_perjalanan_dinas($hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data</div>');
    }

    redirect('laporan/bpd');
  }

  // public function biaya_perjalanan_dinas() {
  //   $this->load->view('templates/panel/header');
  //   $this->load->view('templates/panel/sidebar');
  //   $this->load->view('templates/panel/navbar');
  //   $this->load->view("app/pengajuan/biaya_perjalanan_dinas");
  //   $this->load->view('templates/panel/footer');
  // }

  // public function add_biaya_perjalanan_dinas() {
  //   $data = $this->input->post();

  //   $hash_id = $this->pengajuan_m->insert_biaya_perjalanan_dinas($data);
  //   if($hash_id) {
  //     redirect('surat/bpd/' . $hash_id);
  //   }
  // }

  public function biaya_perjalanan_dinas() {
    $all_SPPD = $this->laporan_m->get_all_surat_perintah_perjalanan_dinas();
    $acceptance_sppd = [];

    foreach($all_SPPD as $sppd) {
      if($sppd['nip_karyawan'] == $this->session->userdata("SESS_SPPD_NIP")) {
        array_push($acceptance_sppd, $sppd);
      }
    }

    $data['SPPD'] = $acceptance_sppd;

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/biaya_perjalanan_dinas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_biaya_perjalanan_dinas() {
    $data = $this->input->post();
    $data['user_id'] = $this->session->userdata("SESS_SPPD_USERID");
    $karyawan = $this->karyawan_m->get_single_karyawan_by_user_id($data['user_id']);
    $data['NIP_karyawan'] = $karyawan['NIP'];
    $data['nama_karyawan'] = $karyawan['nama'];

    $config['upload_path']          = 'uploads/documents/';
    $config['allowed_types']        = 'jpg|jpeg|png';

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('file_dokumen'))
    {
      var_dump($this->upload->data());

      $error = array('error' => $this->upload->display_errors());

      var_dump($error); die;
    }
    else
    {
      $dokumenData = array('upload_data' => $this->upload->data());

      $data['file_dokumen'] = $dokumenData['upload_data']['file_name'];
    }
    
    $hash_id = $this->pengajuan_m->insert_biaya_perjalanan_dinas($data);
    if($hash_id) {
      redirect("na/bpd/laporan");
      // redirect('surat/bpd/' . $hash_id);
    }
  }

  public function edit_biaya_perjalanan_dinas($hash_id) {
    $data['laporan'] = $this->laporan_m->get_single_biaya_perjalanan_dinas($hash_id);
    $data['hash_id'] = $hash_id;
    
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view("app/pengajuan/edit_biaya_perjalanan_dinas", $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_edit_biaya_perjalanan_dinas($hash_id) {
    $data = $this->input->post();

    if($this->pengajuan_m->edit_biaya_perjalanan_dinas($data, $hash_id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data</div>');
    }

    redirect('laporan/bpd');
  }
}