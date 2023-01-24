<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SuratController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("PengajuanModel", "pengajuan_m");
  }

  public function surat_perintah_perjalanan_dinas() {
    $data['author'] = "Kuasa Pengguna Anggaran/Pejabat Pembuat Komitment Badan Ketahanan Pangan Provinsi Kalimantan Selatan di Banjarbaru";
    $data['nama_NIP'] = "Muhammad Insan Kamil / 1600018015";
    $data['pangkat_golongan'] = "VII-A";
    $data['jabatan'] = "Penelitian dan Pengembangan";
    $data['tingkat_perjalanan_dinas'] = "PRO";
    $data['maksud_perjalanan_dinas'] = "Healing";
    $data['alat_angkutan'] = "Jet Tempur";
    $data['tempat_berangkat'] = "Banjarmasin";
    $data['tempat_tujuan'] = "New York";
    $data['lama_dinas'] = "10 Hari";
    $data['tanggal_berangkat'] = "2023-01-15";
    $data['tanggal_kembali'] = "2023-01-25";

    $pengikut = [
      [
        'nama' => "Naruto",
        'tanggal_lahir' => "1994-01-01",
        'keterangan' => ''
      ],
      [
        'nama' => "Sasuke",
        'tanggal_lahir' => "1994-01-01",
        'keterangan' => ''
      ],
      [
        'nama' => "Sakura",
        'tanggal_lahir' => "1994-01-01",
        'keterangan' => ''
      ],
      [
        'nama' => "Kakashi",
        'tanggal_lahir' => "1974-01-01",
        'keterangan' => ''
      ]
    ];

    $data['pengikut'] = $pengikut;
    $data['beban_anggaran_instansi'] = "NASA";
    $data['beban_anggaran_mata_anggaran'] = "Rupiah";
    $data['keterangan_lainnya'] = "";

    $this->load->view("app/surat/surat_perintah_perjalanan_dinas", $data);
  }

  public function surat_perintah_tugas($hash_id) {
    $data['surat'] = $this->pengajuan_m->get_surat_perintah_tugas($hash_id);

    var_dump($data); die;

    $this->load->view("app/surat/surat_perintah_tugas", $data);
  }

  public function laporan_perjalanan_dinas() {
    $data['surat'] = $this->pengajuan_m->get_surat_perintah_tugas($hash_id);

    $this->load->view("app/surat/laporan_perjalanan_dinas", $data);
  }
}