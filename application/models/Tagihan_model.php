<?php 

class Tagihan_model extends CI_model {
    public function getAllTagihan()
    {
        return $this->db->get('tagihan_air')->result_array();
    }

    public function tambahDataTagihan()
    {
        $data = [
            "tagihan_air" => $this->input->post('tagihan_air', true),
            "password" => $this->input->post('password', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $this->input->post('foto_ktp', true),
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->insert('tagihan_air', $data);
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
            "tagihan_air" => $this->input->post('tagihan_air', true),
            "password" => $this->input->post('password', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $this->input->post('foto_ktp', true),
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->where('tagihan_air', $this->input->post('tagihan_air'));
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