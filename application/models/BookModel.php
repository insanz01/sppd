<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  private function generate_kode()
  {
    $exists = $this->db->get('membership')->result_array();
    if (empty($exists)) {
      return 'BK_000001';
    }

    $id_string = (string)(end($exists)['id']+1);
    $strlen = strlen($id_string);

    $kode = "";

    for ($i = 0; $i < 6 - $strlen; $i++) {
      $kode .= "0";
    }

    $kode .= $id_string;

    return 'BK_' . $kode;
  }

  public function save_book($data)
  {
    $data['kode_buku'] = $this->generate_kode();

    return $this->db->insert('buku', $data);
  }

  public function get_all_books()
  {
    return $this->db->get('buku')->result_array();
  }

  public function get_single_book($id)
  {
    return $this->db->get_where('buku', ['id' => $id])->row_array();
  }

  public function delete_book($id)
  {
    return $this->db->delete('buku', ['id' => $id]);
  }

  public function update_book($data, $id)
  {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('buku');

    return $this->db->rows_affected();
  }
}
