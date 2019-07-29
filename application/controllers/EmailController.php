<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent:: __construct();
    }

    public function index()
    {
        $this->load->view('contact');

        if ($this->input->post('sendEmail')) {
            $config = [
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_user' => 'user@gmail.com',    
                'smtp_pass' => 'user_pass',      
                'smtp_port' => '465',
                'crlf'      => "\r\n",
                'newline'   => "\r\n"
            ];
    
            $to_email = $this->input->post('email');   
            $message = $this->input->post('message');   
        
            $this->load->library('email', $config);
        
            $this->email->from('no-reply@pdam.com', 'PDAM Kabupaten Bantul');
        
            $this->email->to($to_email); 
        
            $this->email->subject('VALIDASI AKUN PDAM MOBILE');
        
            $this->email->message($message);
        
            if ($this->email->send()) {
                echo 'Sukses! email dapat dikirim.';
                
            } else {
                echo 'Error! email tidak dapat dikirim.';
            }
        }     
    }

}