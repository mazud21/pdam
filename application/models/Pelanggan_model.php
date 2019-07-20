<?php 

class Pelanggan_model extends CI_model {
    public function getAllPelanggan()
    {
        //return $this->db->get('pelanggan')->result_array();
        
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('no_pelanggan is not null');
        $this->db->order_by('no_pelanggan','ASC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function upload(){
        $config['upload_path']='./images/';
        $config['allowed_types']='jpg|png|jpeg';
        $config['max_size']='2048';
        $config['remove_space']=TRUE;

        $this->load->library('upload',$config);

        if($this->upload->do_upload('foto_ktp')){
            $return = array(
                'result'=>'success', 
                'file'=> $this->upload->data(), 
                'error'=>'');
                return $return;
        } else {
            $return = array(
                'result'=>'failed',
                'file'=>'',
                'error'=> $this->upload->display_errors());
                return $return;
        }
    }

    public function tambahDataPelanggan($upload)
    {
        $data = [
            "no_pelanggan" => $this->input->post('no_pelanggan', true),
            "password" => $this->input->post('password', true),
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $upload['file']['file_name'],
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->insert('pelanggan', $data);
    }

    public function ubahDataPelanggan(/*$upload*/)
    {
        /*
        if (!$upload['file']['file_name']) {
            $data = [
                "no_pelanggan" => $this->input->post('no_pelanggan', true),
                "password" => $this->input->post('password', true),
                "no_ktp" => $this->input->post('no_ktp', true),
                "nama" => $this->input->post('nama', true),
                "alamat" => $this->input->post('alamat', true),
                "email" => $this->input->post('email', true),
                "no_hp" => $this->input->post('no_hp', true),
                //"foto_ktp" => $upload['file']['file_name'],
                "pilih_tarif" => $this->input->post('pilih_tarif', true)
            ];
    
            $this->db->where('no_pelanggan', $this->input->post('no_pelanggan'));
            $this->db->update('pelanggan', $data);

        } else {
            */
            $data = [
                "no_pelanggan" => $this->input->post('no_pelanggan', true),
                "password" => $this->input->post('password', true),
                "no_ktp" => $this->input->post('no_ktp', true),
                "nama" => $this->input->post('nama', true),
                "alamat" => $this->input->post('alamat', true),
                "email" => $this->input->post('email', true),
                "no_hp" => $this->input->post('no_hp', true),
                //"foto_ktp" => $upload['file']['file_name'],
                "pilih_tarif" => $this->input->post('pilih_tarif', true)
            ];
    
            $this->db->where('no_pelanggan', $this->input->post('no_pelanggan'));
            $this->db->update('pelanggan', $data);
        //}
        
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