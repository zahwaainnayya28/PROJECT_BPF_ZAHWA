<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Info_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Info";
        $data['info'] = $this->Info_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("dashboard/vw_itables", $data);
        $this->load->view("admin/layout/footer_tables");
    }
    public function Tampil()
    {
        $data['judul'] = "Halaman Info";
        $data['info'] = $this->Info_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("user/layout/header", $data);
        $this->load->view("kosmetik/vw_info", $data);
        $this->load->view("user/layout/footer");
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Info";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Jenis Kulit', 'required', [
            'required' => 'Nama Jenis Kulit Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('rekomendasi',  'Rekomendasi', 'required', [
            'required' => 'Rekomendasi Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("dashboard/vw_tambah_info", $data);
            $this->load->view("admin/layout/footer_tables");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'rekomendasi' => $this->input->post('rekomendasi'),
            ];
            $this->Info_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Info Berhasil Ditambah!</div>');
            redirect('Info');
        }
    }
    public function hapus($id)
    {
        $this->Info_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Info tidak dapat dihapus</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Info Berhasil Dihapus!</div>');
        }
        redirect('Info');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Info";
        $data['info'] = $this->Info_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama Jenis Kulit', 'required', [
            'required' => 'Nama Jenis Kulit Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('rekomendasi',  'Rekomendasi', 'required', [
            'required' => 'Rekomendasi Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("dashboard/vw_edit_info", $data);
            $this->load->view("admin/layout/footer_tables");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'rekomendasi' => $this->input->post('rekomendasi'),
                'id' => $this->input->post('id')
            ];
            // $id = $this->input->post('id');
            $this->Info_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Info Berhasil Diubah!</div>');
            redirect('Info');
        }
    }
}
