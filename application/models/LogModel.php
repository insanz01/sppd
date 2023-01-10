<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LogModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  private function is_member_exists($kode_member)
  {
    $user = $this->db->get_where('membership', ['kode_member' => $kode_member])->row_array();

    if (empty($user)) {
      return false;
    }

    return true;
  }

  private function is_book_exists($kode_buku)
  {
    $book = $this->db->get_where('buku', ['kode_buku' => $kode_buku])->row_array();

    if (empty($book)) {
      return false;
    }

    return true;
  }

  public function add_log_keluar($data)
  {
    $tanggal_sekarang = date('Y-m-d');
    $batas_pinjam = date_create($tanggal_sekarang);
    date_add($batas_pinjam, date_interval_create_from_date_string("7 days"));

    $data['batas_pinjam'] = date_format($batas_pinjam, 'Y-m-d');

    if (!$this->is_member_exists($data['kode_member'])) {
      return false;
    }

    if (!$this->is_book_exists($data['kode_buku'])) {
      return false;
    }

    var_dump($data);
    die;
  }

  public function add_log_masuk($data)
  {
  }
}
