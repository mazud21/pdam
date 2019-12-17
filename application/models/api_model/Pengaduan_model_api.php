<?php

class Pengaduan_model_api extends CI_Model{
    
    public function getAduan($no_pelanggan = null){
        //return $this->db->get('pengaduan')->result_array();
        if ($no_pelanggan === null) {
            $this->db->select('p.no_pelanggan, p.nama, p.alamat, p.no_hp, pe.id_pengaduan, pe.keluhan, pe.tanggapan');
            $this->db->from('pelanggan p');
            $this->db->join('pengaduan pe','pe.no_pelanggan= p.no_pelanggan');
            $this->db->order_by('id_pengaduan','desc');
            $query = $this->db->get();
            return $query->result_array();
            
        } else {
            $this->db->select('p.no_pelanggan, p.nama, p.alamat, p.no_hp, pe.id_pengaduan, pe.keluhan, pe.tanggapan');
            $this->db->from('pelanggan p');
            $this->db->where('p.no_pelanggan', $no_pelanggan);
            $this->db->join('pengaduan pe','pe.no_pelanggan= p.no_pelanggan');
            $this->db->order_by('id_pengaduan','desc');
            $query = $this->db->get();
            return $query->result_array();
        }
        
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