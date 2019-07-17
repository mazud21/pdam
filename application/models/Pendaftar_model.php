<?php 

class Pendaftar_model extends CI_model {
    public function getAllPendaftar()
    {
        //return $this->db->get('pelanggan')->result_array();
        
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('no_pelanggan is null');
        $query = $this->db->get();
        return $query->result_array();
        
    }

    public function upload(){
        $config['upload_path']='./images/';
        $config['allowed_types']='jpg|png|jpeg';
        $config['max_size']='2048';
        $config['remove_space']=TRUE;
        $config['overwrite']=TRUE;
        
        $this->load->library('upload',$config);

        if ($this->upload->do_upload('foto_ktp')) {
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

    
    public function tambahDataPendaftar($upload)
    {
        $data = [
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
    

    public function getPendaftarById($no_daftar)
    {
        return $this->db->get_where('pelanggan', ['no_daftar' => $no_daftar])->row_array();
    }

    public function validasi()
    {
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

        $this->db->where('no_daftar', $this->input->post('no_daftar'));
        $this->db->update('pelanggan', $data);
        
    }

    public function hapusDataPendaftar($no_daftar)
    {
        // $this->db->where('id', $id);
        $this->db->delete('pelanggan', ['no_daftar' => $no_daftar]);
    }

    public function cariDataPendaftar()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('no_daftar', $keyword);
        $this->db->like('nama', $keyword);
        return $this->db->get('pelanggan')->result_array();
    }
}