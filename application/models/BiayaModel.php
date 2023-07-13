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

}