<?php

class Pelanggan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->getAllPelanggan();
        if( $this->input->post('keyword') ) {
            $data['pelanggan'] = $this->Pelanggan_model->cariDataPelanggan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pelanggan';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pelanggan_model->tambahDataPelanggan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pelanggan');
        }
    }

    public function hapus($id)
    {
        $this->Pelanggan_model->hapusDataPelanggan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pelanggan');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganById($id);
        $data['jurusan'] = ['Teknik Informatika', 'Teknik Mesin', 'Teknik Planologi', 'Teknik Pangan', 'Teknik Lingkungan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pelanggan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pelanggan_model->ubahDataPelanggan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pelanggan');
        }
    }

}
