<?php
defined('BASEPATH') or exit('No direct script access allowed');

class VisitorModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function save_guestbook_visitor($data)
  {
    return $this->db->insert("bukutamu", $data);
  }

  public function save_guestbook_member($data)
  {
    $query = `SELECT * FROM membership WHERE email = "$data[identitas]" OR nomor_hp = "$data[identitas]"`;
    $member = $this->db->query($query)->row_array();

    if ($member) {
      $sukses = $this->db->insert("bukutamu_membership", [
        'id_member' => $member['id']
      ]);

      return $sukses ? $member : [];
    }

    return [];
  }
}
