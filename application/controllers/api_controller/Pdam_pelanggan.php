<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pdam_pelanggan extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('api_model/Pelanggan_model_api');
    }
    
    public function index_get(){

        $no_pelanggan = $this->get('no_pelanggan');

        if ($no_pelanggan === null) {
            $pelanggan = $this->Pelanggan_model_api->getPelanggan();
        } else {
            $pelanggan = $this->Pelanggan_model_api->getPelanggan($no_pelanggan);
        }
        
        if($pelanggan){
            $this->response([
                'status' => true,
                'data' => $pelanggan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Data tidak ditemukan !'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $no_pelanggan = $this->delete('no_pelanggan');

        if ($no_pelanggan === null) {
            $this->response([
                'status' => false,
                'message' => 'No Pelanggan tidak ditemukan !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Pelanggan_model_api->deletePelanggan($no_pelanggan) > 0) {
                $this->response([
                    'status' => true,
                    'no_pelanggan' => $no_pelanggan,
                    'message' => 'Pelanggan sudah dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No Pelanggan tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    /*
    public function index_post(){
        $data_pell = [
            'no_daftar' => $this->post('no_daftar'),
            'no_ktp' => $this->post('no_ktp'),
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'email' => $this->post('email'),
            'no_hp' => $this->post('no_hp'),
            'foto_ktp' => $this->post('foto_ktp'),
            'pilih_tarif' => $this->post('pilih_tarif'),
            'no_pelanggan' => $this->post('no_pelanggan'),
            'password' => $this->post('password')
        ];

        if ($this->Pelanggan_model_api->createPelanggan($data_pell) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data pelanggan Berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal menambahkan data pelanggan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    */

    //coba upload_image
    public function index_post(){
        $this->load->model('Pelanggan_model_api');
        $upload = $this->Pelanggan_model_api->upload();

        if ($this->Pelanggan_model_api->createPelanggan($upload) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data pelanggan Berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal menambahkan data pelanggan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $no_daftar = $this->put('no_daftar');
        $data_pell = [
            'no_daftar' => $this->put('no_daftar'),
            'no_ktp' => $this->put('no_ktp'),
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'email' => $this->put('email'),
            'no_hp' => $this->put('no_hp'),
            'foto_ktp' => $this->put('foto_ktp'),
            'pilih_tarif' => $this->put('pilih_tarif'),
            'no_pelanggan' => $this->put('no_pelanggan'),
            'password' => $this->put('password')
        ];

        if ($this->Pelanggan_model_api->updatePelanggan($data_pell, $no_daftar) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data pelanggan Berhasil diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal ubah data pelanggan'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
