<?php

class Pendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getAllPendaftar();
        /*
        if( $this->input->post('keyword') ) {
            $data['pelanggan'] = $this->Pendaftar_model->cariDataPendaftar();
        }
        */
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        
        $data['judul'] = 'Form Tambah Data Pendaftar';

        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftar/tambah');
            $this->load->view('templates/footer');
        } else if ($this->input->post('tambah')) {

            $upload = $this->Pendaftar_model->upload();

            if($upload['result']=="success"){
                $this->Pendaftar_model->tambahDataPendaftar($upload);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('pendaftar');
            } else {
                $data['message']=$upload['error'];
            }
        }
    }
    
    public function validasi($no_daftar)
    {
        $data['judul'] = 'Form Ubah Data Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getPendaftarById($no_daftar);
        
        $this->form_validation->set_rules('no_pelanggan', 'Nomor Pelanggan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftar/validasi', $data);
            $this->load->view('templates/footer');
        } else {
                $this->Pendaftar_model->validasi();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('pelanggan');
        }
    }
    
    public function hapus($no_daftar)
    {
        $this->Pendaftar_model->hapusDataPendaftar($no_daftar);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pendaftar');
    }

    public function detail($no_daftar)
    {
        $data['judul'] = 'Detail Data Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getPendaftarById($no_daftar);
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftar/detail', $data);
        $this->load->view('templates/footer');
    }
}
