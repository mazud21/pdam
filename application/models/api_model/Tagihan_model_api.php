<?php

class Tagihan_model extends CI_Model{
    
    public function getTagihan(){
        return $this->db->get('tagihan_air')->result_array();
    }
    
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
}