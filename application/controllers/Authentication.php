<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index(){
        if($this->session->userdata('authenticated')) 
        redirect('home'); 
        $this->load->view('templates/header_login');
        $this->load->view('Authentication/login'); 
        $this->load->view('templates/footer');
    }
    
    public function login(){
        $nip = $this->input->post('nip'); 
        $password = $this->input->post('password'); 
        $admin = $this->Admin_model->get($nip); 
        if(empty($admin)){ 
        $this->session->set_flashdata('message', 'nip tidak ditemukan'); 
        redirect('Authentication'); 
        } else {
                if($password == $admin->password){
                    $session = array(
                    'authenticated'=>true, // Buat session authenticated dengan value true
                    'nip'=>$admin->nip,  // Buat session nip
                    'nama'=>$admin->nama // Buat session authenticated
                    );
                    $this->session->set_userdata($session); 
                    redirect('home'); 
                } else {
                        $this->session->set_flashdata('message', 'Password salah'); 
                        redirect('Authentication'); 
                }
            }
    }

    public function logout(){
        $this->session->sess_destroy(); 
        redirect('Authentication'); 
    }
}