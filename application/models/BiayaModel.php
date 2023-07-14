<?php

class BiayaModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_biaya_pesawat() {
    return $this->db->get('biaya_pesawat')->result_array();
  }

  public function get_single_biaya_pesawat($id) {
    return $this->db->get_where("biaya_pesawat", ['id' => $id])->row_array();
  }

  public function add_biaya_pesawat($data) {
    return $this->db->insert("biaya_pesawat", $data);
  }

  public function edit_biaya_pesawat($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update("biaya_pesawat");

    return $this->db->affected_rows();
  }

  public function delete_biaya_pesawat($id) {
    return $this->db->delete("biaya_pesawat", ['id' => $id]);
  }

  public function get_all_biaya_taxi() {
    return $this->db->get('uang_taxi_perjalanan_dinas')->result_array();
  }

  public function get_single_biaya_taxi($id) {
    return $this->db->get_where("uang_taxi_perjalanan_dinas", ['id' => $id])->row_array();
  }

  public function add_biaya_taxi($data) {
    return $this->db->insert("uang_taxi_perjalanan_dinas", $data);
  }

  public function edit_biaya_taxi($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update("uang_taxi_perjalanan_dinas");

    return $this->db->affected_rows();
  }

  public function delete_biaya_pesawat($id) {
    return $this->db->delete("uang_taxi_perjalanan_dinas", ['id' => $id]);
  }
}