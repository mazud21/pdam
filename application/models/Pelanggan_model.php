<?php 

class Pelanggan_model extends CI_model {
    public function getAllPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function tambahDataPelanggan()
    {
        $data = [
            "no_pelanggan" => $this->input->post('no_pelanggan', true),
            "password" => $this->input->post('password', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $this->input->post('foto_ktp', true),
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->insert('pelanggan', $data);
    }

    public function hapusDataPelanggan($no_pelanggan)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pelanggan', ['no_pelanggan' => $no_pelanggan]);
    }

    public function getPelangganById($no_pelanggan)
    {
        return $this->db->get_where('pelanggan', ['no_pelanggan' => $no_pelanggan])->row_array();
    }

    public function ubahDataPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('pelanggan', $data);
    }

    public function cariDataPelanggan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('pelanggan')->result_array();
    }
}