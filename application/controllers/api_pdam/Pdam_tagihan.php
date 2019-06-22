<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pdam_tagihan extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('Tagihan_model');
    }
    
    public function index_get(){
        $tagihan = $this->Tagihan_model->getTagihan();
        
        if($tagihan){
            $this->response([
                'status' => true,
                'data' => $tagihan
            ], REST_Controller::HTTP_OK);
        }
    }
    
    public function index_delete(){
        $no_tagihan = $this->delete('no_tagihan');

        if ($no_tagihan === null) {
            $this->response([
                'status' => false,
                'message' => 'No Info tagihan air tidak ditemukan !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->Tagihan_model->deleteTagihan($no_tagihan) > 0) {
                $this->response([
                    'status' => true,
                    'no_tagihan' => $no_tagihan,
                    'message' => 'Info tagihan air sudah dihapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No Info tagihan air tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data_tagihan = [
            'no_tagihan' => $this->post('no_tagihan'),
            'denda' => $this->post('denda'),
            'bulan_bayar' => $this->post('bulan_bayar'),
            'biaya_air' => $this->post('biaya_air'),
            'biaya_segel' => $this->post('biaya_segel'),
            'std_awal' => $this->post('std_awal'),
            'std_akhir' => $this->post('std_akhir'),
            'tgl_bayar' => $this->post('tgl_bayar'),
            'status_bayar' => $this->post('status_bayar'),
            'angs_air' => $this->post('angs_air'),
            'angs_non_air' => $this->post('angs_non_air'),
            'total_tagihan' => $this->post('total_tagihan')
        ];

        if ($this->Tagihan_model->createTagihan($data_tagihan) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Info tagihan air Berhasil ditambahkan'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal menambahkan info tagihan air'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put(){
        $no_tagihan = $this->put('no_tagihan');
        $data_tagihan = [
            'no_tagihan' => $this->put('no_tagihan'),
            'denda' => $this->put('denda'),
            'bulan_bayar' => $this->put('bulan_bayar'),
            'biaya_air' => $this->put('biaya_air'),
            'biaya_segel' => $this->put('biaya_segel'),
            'std_awal' => $this->put('std_awal'),
            'std_akhir' => $this->put('std_akhir'),
            'tgl_bayar' => $this->put('tgl_bayar'),
            'status_bayar' => $this->put('status_bayar'),
            'angs_air' => $this->put('angs_air'),
            'angs_non_air' => $this->put('angs_non_air'),
            'total_tagihan' => $this->put('total_tagihan')
        ];

        if ($this->Tagihan_model->updateTagihan($data_tagihan, $no_tagihan) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Info tagihan air Berhasil diubah'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'data' => 'Gagal ubah info tagihan air'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
