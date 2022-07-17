<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['judul'] = "Informasi Tentang Kosmetik";
        $data['produk'] = $this->Produk_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("dashboard/vw_dashboard", $data);
        $this->load->view("admin/layout/footer");
    }
}
