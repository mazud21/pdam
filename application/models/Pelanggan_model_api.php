<?php

class Pelanggan_model_api extends CI_Model{
    
    public function getPelanggan($no_pelanggan = null){

        if ($no_pelanggan === null) {
            return $this->db->get('pelanggan')->result_array();
        } else {
            return $this->db->get_where('pelanggan', ['no_pelanggan' => $no_pelanggan])->result_array();
        }            
    }
    
    public function deletePelanggan($no_pelanggan){
        $this->db->delete('pelanggan', ['no_pelanggan' => $no_pelanggan]);
        return $this->db->affected_rows();
    }

    public function createPelanggan($data_pell){
        $this->db->insert('pelanggan', $data_pell);
        return $this->db->affected_rows();
    }

    public function updatePelanggan($data_pell, $no_daftar){
        $this->db->update('pelanggan', $data_pell, ['no_daftar' => $no_daftar]);
        return $this->db->affected_rows();
    }
}