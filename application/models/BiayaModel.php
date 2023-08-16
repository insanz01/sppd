<?php

class BiayaModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  // pesawat

  public function get_all_biaya_pesawat() {
    return $this->db->get('biaya_pesawat')->result_array();
  }

  public function get_single_biaya_pesawat($id) {
    return $this->db->get_where("biaya_pesawat", ['id' => $id])->row_array();
  }

  public function add_biaya_pesawat($data) {
    $data['kota_asal'] = strtoupper($data['kota_asal']);
    $data['kota_tujuan'] = strtoupper($data['kota_tujuan']);

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

  // taxi

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

  public function delete_biaya_taxi($id) {
    return $this->db->delete("uang_taxi_perjalanan_dinas", ['id' => $id]);
  }

  // uang harian

  public function get_all_biaya_harian() {
    return $this->db->get('uang_harian_perjalanan_dinas')->result_array();
  }

  public function get_single_biaya_harian($id) {
    return $this->db->get_where("uang_harian_perjalanan_dinas", ['id' => $id])->row_array();
  }

  public function add_biaya_harian($data) {
    return $this->db->insert("uang_harian_perjalanan_dinas", $data);
  }

  public function edit_biaya_harian($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update("uang_harian_perjalanan_dinas");

    return $this->db->affected_rows();
  }

  public function delete_biaya_harian($id) {
    return $this->db->delete("uang_harian_perjalanan_dinas", ['id' => $id]);
  }

  // uang harian dki

  public function get_all_biaya_harian_dki() {
    return $this->db->get('uang_harian_perjalanan_dinas_dki')->result_array();
  }

  public function get_single_biaya_harian_dki($id) {
    return $this->db->get_where("uang_harian_perjalanan_dinas_dki", ['id' => $id])->row_array();
  }

  public function add_biaya_harian_dki($data) {
    return $this->db->insert("uang_harian_perjalanan_dinas_dki", $data);
  }

  public function edit_biaya_harian_dki($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update("uang_harian_perjalanan_dinas_dki");

    return $this->db->affected_rows();
  }

  public function delete_biaya_harian_dki($id) {
    return $this->db->delete("uang_harian_perjalanan_dinas_dki", ['id' => $id]);
  }

  // hotel

  public function get_all_biaya_hotel() {
    return $this->db->get('uang_hotel_perjalanan_dinas')->result_array();
  }

  public function get_single_biaya_hotel($id) {
    return $this->db->get_where("uang_hotel_perjalanan_dinas", ['id' => $id])->row_array();
  }

  public function add_biaya_hotel($data) {
    return $this->db->insert("uang_hotel_perjalanan_dinas", $data);
  }

  public function edit_biaya_hotel($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update("uang_hotel_perjalanan_dinas");

    return $this->db->affected_rows();
  }

  public function delete_biaya_hotel($id) {
    return $this->db->delete("uang_hotel_perjalanan_dinas", ['id' => $id]);
  }

  // transportasi

  public function get_all_biaya_transportasi() {
    return $this->db->get('uang_transportasi_perjalanan_dinas')->result_array();
  }

  public function get_single_biaya_transportasi($id) {
    return $this->db->get_where("uang_transportasi_perjalanan_dinas", ['id' => $id])->row_array();
  }

  public function add_biaya_transportasi($data) {
    return $this->db->insert("uang_transportasi_perjalanan_dinas", $data);
  }

  public function edit_biaya_transportasi($data, $id) {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update("uang_transportasi_perjalanan_dinas");

    return $this->db->affected_rows();
  }

  public function delete_biaya_transportasi($id) {
    return $this->db->delete("uang_transportasi_perjalanan_dinas", ['id' => $id]);
  }
}