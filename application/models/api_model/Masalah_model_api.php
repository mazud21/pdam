<?php

class Masalah_model_api extends CI_Model{
    
    public function getMasalah(){
        //return $this->db->get('masalah_air')->result_array();
        $this->db->select('*');
        $this->db->from('masalah_air');
        $this->db->order_by('no_info','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deleteMasalah_air($no_info){
        $this->db->delete('masalah_air', ['no_info' => $no_info]);
        return $this->db->affected_rows();
    }

    public function createMasalah_air($data_masalah){
        $this->db->insert('masalah_air', $data_masalah);
        return $this->db->affected_rows();
    }

    public function updateMasalah_air($data_masalah, $no_info){
        $this->db->update('masalah_air', $data_masalah, ['no_info' => $no_info]);
        return $this->db->affected_rows();
    }
}