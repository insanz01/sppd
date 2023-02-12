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
    $this->create_user($data);
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

  public function get_by_NIP($nip) {
    return $this->db->get_where("karyawan", ['NIP' => $nip])->row_array();
  }

  public function get_single_karyawan_by_user_id($user_id) {
    return $this->db->get_where("karyawan", ['user_id' => $user_id])->row_array();
  }

  public function create_user($data) {
    $userData = [
      'username' => $data['NIP'],
      'password' => password_hash($data['nomor_hp'], PASSWORD_DEFAULT),
      'role_id' => 2,
      'is_active' => 1
    ];

    return $this->db->insert('users', $userData);
  }
}