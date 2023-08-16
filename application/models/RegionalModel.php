<?php

class RegionalModel extends CI_Model {
  public function __construct() {
    parent::__construct();
  }

  public function get_all_provinsi() {
    return $this->db->get("provinces")->result_array();
  }

  public function get_single_provinsi_by_id($id) {
    return $this->db->get_where("provinces", ["id" => $id])->row_array();
  }

  public function get_all_kabupaten() {
    return $this->db->get("regencies")->result_array();
  }

  public function get_all_kabupaten_by_provinsi_id($id_provinsi) {
    return $this->db->get_where("regencies", ["province_id" => $id_provinsi])->result_array();
  }

  public function get_single_kabupaten_by_id($id) {
    return $this->db->get_where("regencies", ["id" => $id])->row_array();
  }
}