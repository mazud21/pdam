<?php

class Tarif_model_api extends CI_Model{
    
    public function getTarif(){
        return $this->db->get('tarif_air')->result_array();
    }
}