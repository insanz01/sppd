<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->model('BookModel', 'book_m');
  }

  public function index()
  {
    $data['books'] = $this->book_m->get_all_books();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/book/index', $data);
    $this->load->view('templates/panel/footer');
  }

  public function add_book()
  {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/book/add');
    $this->load->view('templates/panel/footer');
  }

  public function do_add_book()
  {
    $data = $this->input->post();

    if ($this->book_m->save_book($data)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menambahkan data book</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menambahkan data book</div>');
    }

    redirect('book');
  }

  public function edit_book()
  {
    $data['book'] = $this->book_m->get_single_book();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/book/edit', $data);
    $this->load->view('templates/panel/footer');
  }

  public function do_update_book()
  {
    $id = $this->input->post('id');
    $data = [
      'ISBN' => $this->input->post("ISBN"),
      'judul' => $this->input->post("judul"),
      'deskripsi' => $this->input->post("deskripsi"),
      'gambar' => $this->input->post("gambar"),
      'penulis' => $this->input->post("penulis")
    ];

    if ($this->book_m->update_book($data, $id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil mengubah data book</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal mengubah data book</div>');
    }

    redirect('book');
  }

  public function delete_book()
  {
    $id = $this->input->post('id');

    if ($this->book_m->delete_book($id)) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil menghapus data book</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Gagal menghapus data book</div>');
    }

    redirect('book');
  }
}
