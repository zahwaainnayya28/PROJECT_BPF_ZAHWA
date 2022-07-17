<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['judul'] = "Halaman Profil";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['profil'] = $this->userrole->getBy();
        $this->load->view("user/layout/header", $data);
        $this->load->view("kosmetik/vw_profil", $data);
        $this->load->view("user/layout/footer", $data);
    }
}
