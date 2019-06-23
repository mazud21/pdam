<?php 

class Pelanggan_model extends CI_model {
    public function getAllPelanggan()
    {
        return $this->db->get('pelanggan')->result_array();
    }

    public function tambahDataPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->insert('Pelanggan', $data);
    }

    public function hapusDataPelanggan($no_pel)
    {
        // $this->db->where('id', $id);
        $this->db->delete('Pelanggan', ['id' => $id]);
    }

    public function getPelangganById($no_pel)
    {
        return $this->db->get_where('pelanggan', ['no_pelanggan' => $no_pel])->row_array();
    }

    public function ubahDataPelanggan()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true)
        ];

        $this->db->where('no_pelanggan', $this->input->post('no_pelanggan'));
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