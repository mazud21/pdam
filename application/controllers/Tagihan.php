<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tagihan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tagihan_model');
        $this->load->model('Pelanggan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Tagihan Air';
        
        $data['tagihan_air'] = $this->Tagihan_model->getAllTagihan();

        if( $this->input->post('keyword') ) {
            $data['tagihan_air'] = $this->Tagihan_model->cariDataTagihan();
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('tagihan/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($no_tagihan)
    {
        $data['judul'] = 'Detail Data Tagihan';
        
        $data['tagihan_air'] = $this->Tagihan_model->getTagihanById($no_tagihan);
        
        $this->load->view('templates/header', $data);
        $this->load->view('tagihan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function search(){
        $no_pelanggan = $this->input->post('no_pelanggan');

        $pelanggan = $this->Tagihan_model->viewByNP($no_pelanggan);

        if ( ! empty($pelanggan)) {
            $callback = array(
                'status' => 'success',
                'no_daftar' => $pelanggan->no_daftar,
                'nama' => $pelanggan->nama,
            );
        } else {
            $callback = array('status' => 'failed');
        }
        echo json_encode($callback);
    }

    public function tambah()
    {
        //load data nopel use dropdown
        //$data['pelanggan']=$this->Tagihan_model->getNoPell();

        $data['judul'] = 'Form Tambah Data Tagihan';

        //$this->load->view('tagihan/tambah');

        $this->form_validation->set_rules('tagihan', 'Nomor Tagihan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('foto_ktp', 'Foto KTP', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('tagihan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tagihan_model->tambahDataTagihan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('tagihan');
        }
    }

    public function hapus($tagihan_air)
    {
        $this->Tagihan_model->hapusDataTagihan($tagihan_air);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('tagihan');
    }

    public function ubah($tagihan_air)
    {
        $data['judul'] = 'Form Ubah Data Tagihan';
        $data['tagihan_air'] = $this->Tagihan_model->getTagihanById($tagihan_air);
        $data['pilih_tarif'] = ['A1', 'A2', 'A3', 'B1', 'B2', 'B3'];

        $this->form_validation->set_rules('tagihan_air', 'Nomor Tagihan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required|numeric|min_length[16]|max_length[16]');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        $this->form_validation->set_rules('foto_ktp', 'Foto KTP', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('tagihan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Tagihan_model->ubahDataTagihan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('tagihan');
        }
    }

}
