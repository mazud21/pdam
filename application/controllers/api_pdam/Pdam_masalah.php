<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pdam_masalah extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Masalah_model');
    }
    
    public function index_get(){
        $masalah = $this->Masalah_model->getMasalah();
        
        if($masalah){
            $this->response([
                'status' => true,
                'data' => $masalah
            ], REST_Controller::HTTP_OK);
        }
    }

    public function index_delete(){
        $no_info = $this->delete('no_info');

        if ($no_info === null) {
            $this->response([
                'status' => false,
                'message' => 'No Info masalah air tidak ditemukan !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Masalah_model->deleteMasalah_air($no_info) > 0) {
                $this->response([
                    'status' => true,
                    'no_info' => $no_info,
                    'message' => 'Info masalah air sudah dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No Info masalah air tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data_masalah = [
            'no_info' => $this->post('no_info'),
            'wilayah' => $this->post('wilayah'),
            'hari' => $this->post('hari'),
            'tanggal' => $this->post('tanggal'),
            'estimasi' => $this->post('estimasi'),
            'kerusakan' => $this->post('kerusakan'),
            'alternatif' => $this->post('alternatif'),
            'penanganan' => $this->post('penanganan')
        ];

        if ($this->Masalah_model->createMasalah_air($data_masalah) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Info masalah air Berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal menambahkan info masalah air'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $no_info = $this->put('no_info');
        $data_masalah = [
            'no_info' => $this->put('no_info'),
            'wilayah' => $this->put('wilayah'),
            'hari' => $this->put('hari'),
            'tanggal' => $this->put('tanggal'),
            'estimasi' => $this->put('estimasi'),
            'kerusakan' => $this->put('kerusakan'),
            'alternatif' => $this->put('alternatif'),
            'penanganan' => $this->put('penanganan')
        ];

        if ($this->Masalah_model->updateMasalah_air($data_masalah, $no_info) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Info masalah air Berhasil diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal ubah info masalah air'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
