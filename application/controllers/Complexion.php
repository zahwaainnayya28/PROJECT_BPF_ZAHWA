<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Complexion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('Complexion_model');
    }

    public function index()
    {
        $data['judul'] = "Informasi Tentang Kosmetik";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['complexion'] = $this->Complexion_model->get();
        $this->load->view("admin/layout/header", $data);
        $this->load->view("dashboard/vw_ctables", $data);
        $this->load->view("admin/layout/footer_tables");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Complexion";
        $this->form_validation->set_rules('nama', 'Nama ', 'required', [
            'required' => 'Nama Wajib di isi'
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
        $this->form_validation->set_rules('shade', 'Shade', 'required', [
            'required' => 'Shade Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("dashboard/vw_tambah_c", $data);
            $this->load->view("admin/layout/footer_tables");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'referensi' => $this->input->post('referensi'),
                'komposisi' => $this->input->post('komposisi'),
                'shade' => $this->input->post('shade'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/assets1/assets/images/complexion/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Complexion_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Complexion Berhasil Ditambah!</div>');
            redirect('Complexion');
        }
    }

    public function hapus($id)
    {
        $this->Complexion_model->delete($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Complexion Berhasil Dihapus!</div>');
        redirect('Complexion');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Complexion";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['complexion'] = $this->Complexion_model->getById($id);

        $this->form_validation->set_rules('nama', 'Nama Complexion', 'required', [
            'required' => 'Nama Complexion Wajib di isi'
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
        $this->form_validation->set_rules('shade', 'Shade', 'required', [
            'required' => 'Shade Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/layout/header", $data);
            $this->load->view("dashboard/vw_edit_c", $data);
            $this->load->view("admin/layout/footer_tables");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'deskripsi' => $this->input->post('deskripsi'),
                'referensi' => $this->input->post('referensi'),
                'komposisi' => $this->input->post('komposisi'),
                'shade' => $this->input->post('shade'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = 'assets/assets1/assets/images/complexion/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['complexion']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/assets1/assets/images/complexion/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Complexion_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Complexion Berhasil Diubah!</div>');
            redirect('Complexion');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Complexion";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['complexion'] = $this->Complexion_model->getById($id);
        $this->load->view("user/layout/header", $data);
        $this->load->view("kosmetik/vw_detail", $data);
        $this->load->view("user/layout/footer", $data);
    }
}
