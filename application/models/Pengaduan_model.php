<?php 

class Pengaduan_model extends CI_model {
    public function getAllPengaduan()
    {
        //return $this->db->get('pengaduan')->result_array();
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('pengaduan','pengaduan.no_pelanggan=pelanggan.no_pelanggan');
        $query = $this->db->get();
        return $query->result_array();
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

    public function getPengaduanById($id_pengaduan)
    {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->join('pengaduan', 'pengaduan.no_pelanggan=pelanggan.no_pelanggan');
        $this->db->where('id_pengaduan',$id_pengaduan);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function ubahDataPengaduan()
    {
        $data = [
            "id_pengaduan" => $this->input->post('id_pengaduan', true),
            "keluhan" => $this->input->post('keluhan', true),
            "tanggapan" => $this->input->post('tanggapan', true),
            //"no_daftar" => $this->input->post('no_daftar', true)
        ];

        $this->db->where('id_pengaduan', $this->input->post('id_pengaduan'));
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