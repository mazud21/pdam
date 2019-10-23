<?php

class Masalah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masalah_model');
        $this->load->library('form_validation');
        if( ! $this->session->userdata('authenticated')) 
            redirect('authentication');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Masalah';
        $data['masalah_air'] = $this->Masalah_model->getAllMasalah();
        if( $this->input->post('keyword') ) {
            $data['masalah_air'] = $this->Masalah_model->cariDataMasalah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('masalah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Masalah Air';

        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('estimasi', 'Estimasi', 'required');
        $this->form_validation->set_rules('kerusakan', 'Kerusakan', 'required');
        $this->form_validation->set_rules('alternatif', 'Alternatif', 'required');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('masalah/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Masalah_model->tambahDataMasalah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('masalah');
        }
    }

    public function hapus($no_info)
    {
        $this->Masalah_model->hapusDataMasalah($no_info);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('masalah');
    }

    public function detail($no_info)
    {
        $data['judul'] = 'Detail Data Masalah';
        $data['masalah_air'] = $this->Masalah_model->getMasalahById($no_info);
        $this->load->view('templates/header', $data);
        $this->load->view('masalah/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($no_info)
    {
        $data['judul'] = 'Form Ubah Data Masalah';
        $data['no_info'] = $this->Masalah_model->getMasalahById($no_info);
        
        $this->form_validation->set_rules('no_info', 'Nomor Masalah', 'required');
        $this->form_validation->set_rules('wilayah', 'wilayah', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('estimasi', 'estimasi', 'required');
        $this->form_validation->set_rules('kerusakan', 'kerusakan', 'required');
        $this->form_validation->set_rules('alternatif', 'Alternatif', 'required');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('masalah/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Masalah_model->ubahDataMasalah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('masalah');
        }
    }

}
