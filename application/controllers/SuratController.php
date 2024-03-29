<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    if(!$this->session->userdata('SESS_SPPD_USERID')) {
      redirect('auth');
    }

    $this->load->model("PengajuanModel", "pengajuan_m");
    $this->load->model("HelperModel", "helper_m");
  }

  public function surat_perintah_perjalanan_dinas($hash_id) {
    // $data['author'] = "Kuasa Pengguna Anggaran/Pejabat Pembuat Komitment Badan Ketahanan Pangan Provinsi Kalimantan Selatan di Banjarbaru";
    // $data['nama_NIP'] = "Muhammad Insan Kamil / 1600018015";
    // $data['pangkat_golongan'] = "VII-A";
    // $data['jabatan'] = "Penelitian dan Pengembangan";
    // $data['tingkat_perjalanan_dinas'] = "PRO";
    // $data['maksud_perjalanan_dinas'] = "Healing";
    // $data['alat_angkutan'] = "Jet Tempur";
    // $data['tempat_berangkat'] = "Banjarmasin";
    // $data['tempat_tujuan'] = "New York";
    // $data['lama_dinas'] = "10 Hari";
    // $data['tanggal_berangkat'] = "2023-01-15";
    // $data['tanggal_kembali'] = "2023-01-25";

    // $pengikut = [
    //   [
    //     'nama' => "Naruto",
    //     'tanggal_lahir' => "1994-01-01",
    //     'keterangan' => ''
    //   ],
    //   [
    //     'nama' => "Sasuke",
    //     'tanggal_lahir' => "1994-01-01",
    //     'keterangan' => ''
    //   ],
    //   [
    //     'nama' => "Sakura",
    //     'tanggal_lahir' => "1994-01-01",
    //     'keterangan' => ''
    //   ],
    //   [
    //     'nama' => "Kakashi",
    //     'tanggal_lahir' => "1974-01-01",
    //     'keterangan' => ''
    //   ]
    // ];

    // $data['pengikut'] = $pengikut;
    // $data['beban_anggaran_instansi'] = "NASA";
    // $data['beban_anggaran_mata_anggaran'] = "Rupiah";
    // $data['keterangan_lainnya'] = "";
    $data['surat'] = $this->pengajuan_m->get_surat_perintah_perjalanan_dinas($hash_id);
    $data['surat']['pengikut'] = NULL;

    $this->load->view("app/surat/surat_perintah_perjalanan_dinas", $data);
  }

  public function surat_perintah_tugas($hash_id) {
    $data['surat'] = $this->pengajuan_m->get_surat_perintah_tugas($hash_id);

    $this->load->view("app/surat/surat_perintah_tugas", $data);
  }

  public function nota_dinas($hash_id) {
    $surat = $this->pengajuan_m->get_nota_dinas($hash_id);
    $nomor_SPPD = $surat['nomor_SPPD'];

    $makhluk = $this->helper_m->get_detail_sppd($nomor_SPPD);

    $data['surat'] = $surat;
    $data['makhluk'] = $makhluk;

    $this->load->view("app/surat/nota_dinas", $data);
  }

  public function pembatalan_tugas_perjalanan_dinas($hash_id) {
    $data['surat'] = $this->pengajuan_m->get_surat_pembatalan_tugas_perjalanan_dinas($hash_id);

    $this->load->view("app/surat/pembatalan_tugas_perjalanan_dinas", $data);
  }

  public function laporan_perjalanan_dinas($hash_id) {
    $data['surat'] = $this->pengajuan_m->get_laporan_perjalanan_dinas($hash_id);

    $this->load->view("app/surat/laporan_perjalanan_dinas", $data);
  }

  public function biaya_perjalanan_dinas($hash_id) {
    $data['surat'] = $this->pengajuan_m->get_biaya_perjalanan_dinas($hash_id);

    $this->load->view("app/surat/biaya_perjalanan_dinas", $data);
  }

  public function surat_perintah_perjalanan_dinas_2() {
    $this->load->view("app/surat/surat_perintah_perjalanan_dinas_2");
  }

  // bulk
  public function bulk_surat_perintah_perjalanan_dinas() {
    $all_surat = $this->pengajuan_m->get_bulk_surat_perintah_perjalanan_dinas();

    $acceptance_surat = [];
    foreach($all_surat as $surat) {
      $surat['pengikut'] = null;
      array_push($acceptance_surat, $surat);
    }

    $data['all_surat'] = $acceptance_surat;

    $this->load->view("app/bulk_print/surat_perintah_perjalanan_dinas", $data);
  }

  public function bulk_surat_perintah_tugas() {
    $data['all_surat'] = $this->pengajuan_m->get_bulk_surat_perintah_tugas();

    $this->load->view("app/bulk_print/surat_perintah_tugas", $data);
  }

  public function bulk_laporan_perjalanan_dinas() {
    $data['all_surat'] = $this->pengajuan_m->get_bulk_laporan_perjalanan_dinas();

    $this->load->view("app/bulk_print/laporan_perjalanan_dinas", $data);
  }

  public function bulk_biaya_perjalanan_dinas() {
    $data['all_surat'] = $this->pengajuan_m->get_bulk_biaya_perjalanan_dinas();

    $this->load->view("app/bulk_print/biaya_perjalanan_dinas", $data);
  }

  // list
  public function list_surat_perintah_perjalanan_dinas() {
    $filter_awal = $this->session->userdata("FILTER_AWAL");
    $filter_akhir = $this->session->userdata("FILTER_AKHIR");

    $filter = [
      'filter_awal' => $filter_awal,
      'filter_akhir' => $filter_akhir
    ];
    
    $all_surat = $this->pengajuan_m->get_list_surat_perintah_perjalanan_dinas($filter);

    $acceptance_surat = [];
    foreach($all_surat as $surat) {
      $surat['pengikut'] = null;
      array_push($acceptance_surat, $surat);
    }

    $data['all_surat'] = $acceptance_surat;

    $this->load->view("app/list_print/surat_perintah_perjalanan_dinas", $data);
  }

  public function list_surat_perintah_tugas() {
    $filter_awal = $this->session->userdata("FILTER_AWAL");
    $filter_akhir = $this->session->userdata("FILTER_AKHIR");

    $filter = [
      'filter_awal' => $filter_awal,
      'filter_akhir' => $filter_akhir
    ];

    $data['all_surat'] = $this->pengajuan_m->get_list_surat_perintah_tugas($filter);

    $this->load->view("app/list_print/surat_perintah_tugas", $data);
  }

  public function list_laporan_perjalanan_dinas() {
    $filter_awal = $this->session->userdata("FILTER_AWAL");
    $filter_akhir = $this->session->userdata("FILTER_AKHIR");

    $filter = [
      'filter_awal' => $filter_awal,
      'filter_akhir' => $filter_akhir
    ];

    $data['all_surat'] = $this->pengajuan_m->get_list_laporan_perjalanan_dinas($filter);

    $this->load->view("app/list_print/laporan_perjalanan_dinas", $data);
  }

  public function list_biaya_perjalanan_dinas() {
    $filter_awal = $this->session->userdata("FILTER_AWAL");
    $filter_akhir = $this->session->userdata("FILTER_AKHIR");

    $filter = [
      'filter_awal' => $filter_awal,
      'filter_akhir' => $filter_akhir
    ];

    $data['all_surat'] = $this->pengajuan_m->get_list_biaya_perjalanan_dinas($filter);

    $this->load->view("app/list_print/biaya_perjalanan_dinas", $data);
  }

  public function list_nota_dinas() {
    $filter_awal = $this->session->userdata("FILTER_AWAL");
    $filter_akhir = $this->session->userdata("FILTER_AKHIR");

    $filter = [
      'filter_awal' => $filter_awal,
      'filter_akhir' => $filter_akhir
    ];

    $data['all_surat'] = $this->pengajuan_m->get_list_nota_dinas($filter);

    $this->load->view("app/list_print/nota_dinas", $data);
  }
}