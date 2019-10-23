<?php

class Pengaduan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengaduan_model');
        $this->load->library('form_validation');
        if( ! $this->session->userdata('authenticated')) 
            redirect('authentication');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pengaduan';
        $data['pengaduan'] = $this->Pengaduan_model->getAllPengaduan();
        if( $this->input->post('keyword') ) {
            $data['pengaduan'] = $this->Pengaduan_model->cariDataPengaduan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pengaduan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pengaduan';

        $this->form_validation->set_rules('pengaduan', 'Nomor Pengaduan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('foto_ktp', 'Foto KTP', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('Pengaduan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Pengaduan_model->tambahDataPengaduan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Pengaduan');
        }
    }

    public function hapus($pengaduan)
    {
        $this->Pengaduan_model->hapusDataPengaduan($pengaduan);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('Pengaduan');
    }

    public function detail($id_pengaduan)
    {
        $data['judul'] = 'Detail Data Pengaduan';
        $data['pengaduan'] = $this->Pengaduan_model->getPengaduanById($id_pengaduan);
        $this->load->view('templates/header', $data);
        $this->load->view('pengaduan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id_pengaduan)
    {
        $data['judul'] = 'Form Ubah Data Pengaduan';
        $data['pengaduan'] = $this->Pengaduan_model->getPengaduanById($id_pengaduan);
        
        $this->form_validation->set_rules('id_pengaduan', 'Id Pengaduan', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengaduan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Pengaduan_model->ubahDataPengaduan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pengaduan');
        }
    }

}
