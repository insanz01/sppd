<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KaryawanModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_karyawan() {
    return $this->db->get('karyawan')->result_array();
  }

  public function save_karyawan($data) {
    $this->db->insert('karyawan', $data);
    return $this->db->insert_id();
  }

  public function get_single_karyawan($id) {
    return $this->db->get_where('karyawan', ['id' => $id])->row_array();
  }

  public function delete_karyawan($id) {
    return $this->db->delete('karyawan', ['id'=> $id]);
  }

  public function update_karyawan($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('karyawan');

    return $this->db->affected_rows();
  }
}