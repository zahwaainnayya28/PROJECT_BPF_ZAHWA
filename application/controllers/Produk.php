<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['judul'] = "Informasi Tentang Kosmetik";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("dashboard/vw_tables", $data);
        $this->load->view("admin/layout/footer_tables");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Produk";
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', [
            'required' => 'Nama Produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga Wajib di isi',
            'integer' => 'Harga harus Angka'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);
        $this->form_validation->set_rules('referensi', 'Referensi', 'required', [
            'required' => 'Referensi Wajib di isi'
        ]);
        $this->form_validation->set_rules('komposisi', 'Komposisi', 'required', [
            'required' => 'Komposisi Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("dashboard/vw_tambah_produk", $data);
            $this->load->view("admin/layout/footer_tables");
        } else {
            $data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'referensi' => $this->input->post('referensi'),
                'komposisi' => $this->input->post('komposisi'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/assets1/assets/images/produk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Produk_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Ditambah!</div>');
            redirect('Produk');
        }
    }

    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Produk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->getById($id);
        $this->load->view("user/layout/header", $data);
        $this->load->view("kosmetik/vw_produk", $data);
        $this->load->view("user/layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Produk_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Dihapus!</div>');
        redirect('Produk');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Produk";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->getById($id);

        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required', [
            'required' => 'Nama Produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required|integer', [
            'required' => 'Harga Wajib di isi',
            'integer' => 'Harga harus Angka'
        ]);
        $this->form_validation->set_rules('referensi', 'Referensi', 'required', [
            'required' => 'Referensi Wajib di isi'
        ]);
        $this->form_validation->set_rules('komposisi', 'Komposisi', 'required', [
            'required' => 'Komposisi Wajib di isi'
        ]);
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required', [
            'required' => 'Deskripsi Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("dashboard/vw_edit_produk", $data);
            $this->load->view("admin/layout/footer_tables");
        } else {
            $data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'referensi' => $this->input->post('referensi'),
                'komposisi' => $this->input->post('komposisi'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/assets1/assets/images/produk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['produk']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/assets1/assets/images/produk/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Produk_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Produk Berhasil Diubah!</div>');
            redirect('Produk');
        }
    }

    // public function update()
    // {
    //     $data = [
    //         'nama_produk' => $this->input->post('nama_produk'),
    //         'harga' => $this->input->post('harga'),
    //         'deskripsi' => $this->input->post('deskripsi'),
    //         'referensi' => $this->input->post('referensi'),
    //         'komposisi' => $this->input->post('komposisi'),
    //     ];
    //     $id = $this->input->post('id');
    //     $this->Produk_model->update(['id' => $id], $data);
    //     $this->session->set_flashdata('message', '<div class="alert alert-success" 
    //     role="alert">Data Produk Berhasil DiUbah!</div>');
    //     redirect('Produk');
    // }

    // function upload()
    // {
    //     $data = [
    //         'nama_produk' => $this->input->post('nama_produk'),
    //         'harga' => $this->input->post('harga'),
    //         'deskripsi' => $this->input->post('deskripsi'),
    //         'referensi' => $this->input->post('referensi'),
    //         'komposisi' => $this->input->post('komposisi'),
    //     ];
    //     $this->Produk_model->insert($data);
    //     redirect('Produk');
    // }
}
