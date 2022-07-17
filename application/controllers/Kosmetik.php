<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kosmetik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Produk_model');
        $this->load->model('Complexion_model');
    }

    public function index()
    {
        $data['judul'] = "Informasi Tentang Kosmetik";
        $data['produk'] = $this->Produk_model->get();
        $data['complexion'] = $this->Complexion_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("user/layout/header", $data);
        $this->load->view("kosmetik/vw_kosmetik", $data);
        $this->load->view("user/layout/footer", $data);
    }
}
