<?php

class Pengaduan_model extends CI_Model{
    
    public function getAduan(){
        return $this->db->get('pengaduan')->result_array();
    }

    public function deletePengaduan($id_pengaduan){
        $this->db->delete('pengaduan', ['id_pengaduan' => $id_pengaduan]);
        return $this->db->affected_rows();
    }

    public function createPengaduan($data_pengaduan){
        $this->db->insert('pengaduan', $data_pengaduan);
        return $this->db->affected_rows();
    }

    public function updatePengaduan($data_pengaduan, $id_pengaduan){
        $this->db->update('pengaduan', $data_pengaduan, ['id_pengaduan' => $id_pengaduan]);
        return $this->db->affected_rows();
    }
}