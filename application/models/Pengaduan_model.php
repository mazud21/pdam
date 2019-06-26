<?php 

class Pengaduan_model extends CI_model {
    public function getAllPengaduan()
    {
        return $this->db->get('pengaduan')->result_array();
    }

    public function tambahDataPengaduan()
    {
        $data = [
            "pengaduan" => $this->input->post('pengaduan', true),
            "password" => $this->input->post('password', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $this->input->post('foto_ktp', true),
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->insert('pengaduan', $data);
    }

    public function hapusDataPengaduan($pengaduan)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pengaduan', ['pengaduan' => $pengaduan]);
    }

    public function getPengaduanById($pengaduan)
    {
        return $this->db->get_where('pengaduan', ['pengaduan' => $pengaduan])->row_array();
    }

    public function ubahDataPengaduan()
    {
        $data = [
            "pengaduan" => $this->input->post('pengaduan', true),
            "password" => $this->input->post('password', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $this->input->post('foto_ktp', true),
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->where('pengaduan', $this->input->post('pengaduan'));
        $this->db->update('pengaduan', $data);
    }

    public function cariDataPengaduan()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jurusan', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        return $this->db->get('pengaduan')->result_array();
    }
}