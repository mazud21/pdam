<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Pdam_tarif extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('api_model/Tarif_model_api');
    }
    
    public function index_get(){
        $tarif = $this->Tarif_model_api->getTarif();
        
        if($tarif){
            $this->response([
                'status' => true,
                'data' => $tarif
            ], REST_Controller::HTTP_OK);
        }
    }
}
