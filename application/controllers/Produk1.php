<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk1 extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        // $data['judul'] = "Informasi Tentang Kosmetik";
        // $data['produk'] = $this->Produk_model->get();
        // $data['komentar'] = $this->Komentar_model->get();
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $this->load->view("user/layout/header", $data);
        // $this->load->view("kosmetik/vw_produk", $data);
        // $this->load->view("user/layout/footer", $data);
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Produk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->getById($id);
        $this->load->view("user/layout/header", $data);
        $this->load->view("kosmetik/vw_detail_produk", $data);
        $this->load->view("user/layout/footer", $data);
    }
}
