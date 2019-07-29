<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
    }

    public function index()
    {

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

        $this->load->library('email', $config);

        $this->email->from('no-reply@pdam.com', 'PDAM Kabupaten Bantul');

        $this->email->to('user@gmail.com'); 

        $this->email->subject('VALIDASI AKUN PDAM MOBILE');

        $this->email->message("No Pelanggan :  <br> Password : ");

        if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
            redirect('EmailController');
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}