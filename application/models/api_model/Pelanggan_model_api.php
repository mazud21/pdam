<?php

class Pelanggan_model_api extends CI_Model{
    
    public function getPelanggan($no_pelanggan = null){

        if ($no_pelanggan === null) {
            return $this->db->get('pelanggan')->result_array();
        } else {
            return $this->db->get_where('pelanggan', ['no_pelanggan' => $no_pelanggan])->result_array();
        }            
    }
    
    //register start
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

    //can upload but still wrong in condition(if)
    public function createPelanggan($upload){

        $data_pell = [
            "no_ktp" => $this->input->post('no_ktp', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "email" => $this->input->post('email', true),
            "no_hp" => $this->input->post('no_hp', true),
            "foto_ktp" => $upload['file']['file_name'],
            "pilih_tarif" => $this->input->post('pilih_tarif', true)
        ];

        $this->db->insert('pelanggan', $data_pell);
    }
    //register end

    public function updatePelanggan($data_pell, $no_daftar){
        $this->db->update('pelanggan', $data_pell, ['no_daftar' => $no_daftar]);
        return $this->db->affected_rows();
    }

    public function deletePelanggan($no_pelanggan){
        $this->db->delete('pelanggan', ['no_pelanggan' => $no_pelanggan]);
        return $this->db->affected_rows();
    }

    protected $user_table = 'pelanggan';

    public function login($no_pelanggan, $password)
    {
        $this->db->where('no_pelanggan', $no_pelanggan);
        $this->db->where('password', $password);
        $result = $this->db->get($this->user_table)->row();
        if($result){
            return $result;
     	}else{
     		return 0;
     	}
    }
}