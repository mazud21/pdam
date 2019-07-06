<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Tagihan_Model');
        $this->load->model('Pelanggan_Model');
        
      }
      public function index(){
        $this->load->view('form');
      }
      
      public function search(){
        // Ambil data NIS yang dikirim via ajax post
        $no_pelanggan = $this->input->post('no_pelanggan');
        
        $pelanggan = $this->Tagihan_Model->viewByNP($no_pelanggan);
        
        if( ! empty($pelanggan)){ // Jika data siswa ada/ditemukan
          // Buat sebuah array
          $callback = array(
            'status' => 'success', // Set array status dengan success
            'no_daftar' => $pelanggan->no_daftar, // Set array nama dengan isi kolom nama pada tabel siswa
            'nama' => $pelanggan->nama, // Set array nama dengan isi kolom nama pada tabel siswa
            //'jenis_kelamin' => $siswa->jenis_kelamin, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
            //'telepon' => $siswa->telp, // Set array jenis_kelamin dengan isi kolom telp pada tabel siswa
            //'alamat' => $siswa->alamat, // Set array jenis_kelamin dengan isi kolom alamat pada tabel siswa
          );
        }else{
          $callback = array('status' => 'failed'); // set array status dengan failed
        }
        echo json_encode($callback); // konversi varibael $callback menjadi JSON
      }
}
