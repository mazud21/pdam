<?php

class Tagihan_model_api extends CI_Model{
    
    public function getTagihan($no_daftar = null){
        //return $this->db->get('tagihan_air')->result_array();
        
        if ($no_daftar === null) {
            $this->db->select('*');
            $this->db->from('pelanggan');
            $this->db->join('tagihan_air','tagihan_air.no_daftar=pelanggan.no_daftar');
            $query = $this->db->get();
            return $query->result_array();
            //return $this->db->get('pelanggan')->result_array();
        } else {
            $this->db->select('*');
            $this->db->from('pelanggan');
            $this->db->join('tagihan_air', 'tagihan_air.no_daftar=pelanggan.no_daftar');
            $this->db->get_where('tagihan_air', ['no_daftar',$no_daftar]);
            $query = $this->db->get();
            return $query->row_array();
            //return $this->db->get_where('tagihan_air', ['no_daftar' => $no_daftar])->result_array();
        }
    }
/*
    public function deleteTagihan($no_tagihan){
        $this->db->delete('tagihan_air', ['no_tagihan' => $no_tagihan]);
        return $this->db->affected_rows();
    }

    public function createTagihan($data_tagihan){
        $this->db->insert('tagihan_air', $data_tagihan);
        return $this->db->affected_rows();
    }

    public function updateTagihan($data_tagihan, $no_tagihan){
        $this->db->update('tagihan_air', $data_tagihan, ['no_tagihan' => $no_tagihan]);
        return $this->db->affected_rows();
    }
*/
}