<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MembershipModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  private function generate_kode()
  {
    $exists = $this->db->get('membership')->result_array();
    if (empty($exists)) {
      return 'MB_000001';
    }

    $id_string = (string)(end($exists)['id']+1);
    $strlen = strlen($id_string);

    $kode = "";

    for ($i = 0; $i < 6 - $strlen; $i++) {
      $kode .= "0";
    }

    $kode .= $id_string;

    return 'MB_' . $kode;
  }

  private function is_email_exists($email) {
    $exists = $this->db->get_where('membership', ['email' => $email])->row_array();

    return !empty($exists);
  }

  private function is_phone_number_exists($phone_number) {
    $exists = $this->db->get_where('membership', ['nomor_hp' => $phone_number])->row_array();

    return !empty($exists);
  }

  public function save_membership($data)
  {
    $data['kode_member'] = $this->generate_kode();

    if($this->is_email_exists($data['email'])) {
      return false;
    }

    if($this->is_phone_number_exists($data['nomor_hp'])) {
      return false;
    }

    return $this->db->insert('membership', $data);
  }

  public function get_all_memberships()
  {
    return $this->db->get('membership')->result_array();
  }

  public function get_single_membership($id)
  {
    return $this->db->get_where('membership', ['id' => $id])->row_array();
  }

  public function delete_membership($id)
  {
    return $this->db->delete('membership', ['id' => $id]);
  }

  public function update_membership($data, $id)
  {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('membership');

    return $this->db->affected_rows();
  }
}
