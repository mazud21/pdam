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

        $this->form_validation->set_rules('no_pelanggan', 'Nomor Pelanggan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('foto_ktp', 'Foto KTP', 'required');

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

    public function hapus($no_pelanggan)
    {
        $this->Pelanggan_model->hapusDataPelanggan($no_pelanggan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pelanggan');
    }

    public function detail($no_pelanggan)
    {
        $data['judul'] = 'Detail Data Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganById($no_pelanggan);
        $this->load->view('templates/header', $data);
        $this->load->view('pelanggan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($no_pelanggan)
    {
        $data['judul'] = 'Form Ubah Data Pelanggan';
        $data['pelanggan'] = $this->Pelanggan_model->getPelangganById($no_pelanggan);
        $data['pilih_tarif'] = ['A1', 'A2', 'A3', 'B1', 'B2', 'B3'];

        $this->form_validation->set_rules('no_pelanggan', 'Nomor Pelanggan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|numeric|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('foto_ktp', 'Foto KTP', 'required');

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
