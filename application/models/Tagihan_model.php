<?php 

class Tagihan_model extends CI_model {
    public function getAllTagihan()
    {
        return $this->db->get('tagihan_air')->result_array();
    }

    public function tambahDataTagihan()
    {
        $data = [
            "no_tagihan" => $this->input->post('no_tagihan', true),
            "denda" => $this->input->post('denda', true),
            "bulan_bayar" => $this->input->post('bulan_bayar', true),
            "biaya_air" => $this->input->post('biaya_air', true),
            "biaya_segel" => $this->input->post('biaya_segel', true),
            "std_awal" => $this->input->post('std_awal', true),
            "std_akhir" => $this->input->post('std_akhir', true),
            "tgl_bayar" => $this->input->post('tgl_bayar', true),
            "status_bayar" => $this->input->post('status_bayar', true),
            "angs_air" => $this->input->post('angs_air', true),
            "angs_non_air" => $this->input->post('angs_non_air', true),
            "total_tagihan" => $this->input->post('total_tagihan', true)
        ];

        $this->db->insert('tagihan_air', $data);
    }

    public function getNoPell(){
        $query = $this->db->query('SELECT * from pelanggan');
        return $query->result();
    }

    public function hapusDataTagihan($tagihan_air)
    {
        // $this->db->where('id', $id);
        $this->db->delete('tagihan_air', ['tagihan_air' => $tagihan_air]);
    }

    public function getTagihanById($tagihan_air)
    {
        return $this->db->get_where('tagihan_air', ['tagihan_air' => $tagihan_air])->row_array();
    }

    public function ubahDataTagihan()
    {
        $data = [
            "no_tagihan" => $this->input->post('no_tagihan', true),
            "denda" => $this->input->post('denda', true),
            "bulan_bayar" => $this->input->post('bulan_bayar', true),
            "biaya_air" => $this->input->post('biaya_air', true),
            "biaya_segel" => $this->input->post('biaya_segel', true),
            "std_awal" => $this->input->post('std_awal', true),
            "std_akhir" => $this->input->post('std_akhir', true),
            "tgl_bayar" => $this->input->post('tgl_bayar', true),
            "status_bayar" => $this->input->post('status_bayar', true),
            "angs_air" => $this->input->post('angs_air', true),
            "angs_non_air" => $this->input->post('angs_non_air', true),
            "total_tagihan" => $this->input->post('total_tagihan', true)
        ];

        $this->db->where('no_tagihan', $this->input->post('no_tagihan'));
        $this->db->update('tagihan_air', $data);
    }

    public function cariDataTagihan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('tagihan_air')->result_array();
    }
}