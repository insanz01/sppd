<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function save_user($data)
  {
    return $this->db->insert('users', $data);
  }

  public function get_all_users()
  {
    return $this->db->get('users')->result_array();
  }

  public function get_single_user()
  {
    return $this->db->get_where('users')->row_array();
  }

  public function delete_user($id)
  {
    return $this->db->delete('users', ['id' => $id]);
  }

  public function update_user($data, $id)
  {
    $this->db->set($data);
    $this->db->where('id', $id);
    $this->db->update('users');

    return $this->db->rows_affected();
  }
}
