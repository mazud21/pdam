<?php

class Tagihan_model_api extends CI_Model{
    
    public function getTagihan($no_pelanggan = null){
        //return $this->db->get('tagihan_air')->result_array();
        
        if ($no_pelanggan === null) {
            $this->db->select('*');
            $this->db->from('pelanggan');
            $this->db->join('tagihan_air','tagihan_air.no_pelanggan=pelanggan.no_pelanggan');
            $this->db->order_by('no_tagihan','DESC');
            $query = $this->db->get();
            return $query->result_array();
            //return $this->db->get('pelanggan')->result_array();
        } else {
            $this->db->select('*');
            $this->db->from('pelanggan p');
            $this->db->where('p.no_pelanggan',$no_pelanggan);
            $this->db->join('tagihan_air t','p.no_pelanggan = t.no_pelanggan');
            $this->db->order_by('no_tagihan','DESC');
            $query = $this->db->get();
            return $query->result_array();
            //return $this->db->get_where('tagihan_air', ['no_pelanggan' => $no_pelanggan])->result_array();
        }
    }
}