<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pdam_aduan extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Pengaduan_model');
    }
    
    public function index_get(){
        $aduan = $this->Pengaduan_model->getAduan();
        
        if($aduan){
            $this->response([
                'status' => true,
                'data' => $aduan
            ], REST_Controller::HTTP_OK);
        }
    }

    public function index_delete(){
        $id_pengaduan = $this->delete('id_pengaduan');

        if ($id_pengaduan === null) {
            $this->response([
                'status' => false,
                'message' => 'No Info pengaduan air tidak ditemukan !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Pengaduan_model->deletePengaduan($id_pengaduan) > 0) {
                $this->response([
                    'status' => true,
                    'id_pengaduan' => $id_pengaduan,
                    'message' => 'Info pengaduan air sudah dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No Info pengaduan air tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data_pengaduan = [
            'id_pengaduan' => $this->post('id_pengaduan'),
            'keluhan' => $this->post('keluhan'),
            'tanggapan' => $this->post('tanggapan')
        ];

        if ($this->Pengaduan_model->createPengaduan($data_pengaduan) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Info pengaduan Berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal menambahkan info pengaduan air'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $id_pengaduan = $this->put('id_pengaduan');
        $data_pengaduan = [
            'id_pengaduan' => $this->put('id_pengaduan'),
            'keluhan' => $this->put('keluhan'),
            'tanggapan' => $this->put('tanggapan')
        ];

        if ($this->Pengaduan_model->updatePengaduan($data_pengaduan, $id_pengaduan) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Info pengaduan Berhasil diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal ubah info pengaduan air'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
