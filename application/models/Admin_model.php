<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    public function get($admin){
        $this->db->where('nip', $admin); 
        $result = $this->db->get('admin')->row();
        return $result;
    }
}