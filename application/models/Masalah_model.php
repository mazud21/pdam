<?php 

class Masalah_model extends CI_model {
    public function getAllMasalah()
    {
        //return $this->db->get('masalah_air')->result_array();
        $this->db->select('*');
        $this->db->from('masalah_air');
        $this->db->order_by('no_info','DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahDataMasalah()
    {
        $data = [
            "no_info" => $this->input->post('no_info', true),
            "wilayah" => $this->input->post('wilayah', true),
            "hari" => $this->input->post('hari', true),
            "tanggal" => $this->input->post('tanggal', true),
            "estimasi" => $this->input->post('estimasi', true),
            "kerusakan" => $this->input->post('kerusakan', true),
            "alternatif" => $this->input->post('alternatif', true),
            "penanganan" => $this->input->post('penanganan', true)
            
        ];

        $this->db->insert('masalah_air', $data);
    }

    public function hapusDataMasalah($no_info)
    {
        // $this->db->where('id', $id);
        $this->db->delete('masalah_air', ['no_info' => $no_info]);
    }

    public function getMasalahById($no_info)
    {
        return $this->db->get_where('masalah_air', ['no_info' => $no_info])->row_array();
    }

    public function ubahDataMasalah()
    {
        $data = [
            "no_info" => $this->input->post('no_info', true),
            "wilayah" => $this->input->post('wilayah', true),
            "hari" => $this->input->post('hari', true),
            "tanggal" => $this->input->post('tanggal', true),
            "estimasi" => $this->input->post('estimasi', true),
            "kerusakan" => $this->input->post('kerusakan', true),
            "alternatif" => $this->input->post('alternatif', true),
            "penanganan" => $this->input->post('penanganan', true)
            
        ];

        $this->db->where('no_info', $this->input->post('no_info'));
        $this->db->update('masalah_air', $data);
    }

    public function cariDataMasalah()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('tanggal', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('kerusakan', $keyword);
        return $this->db->get('Masalah')->result_array();
    }
}