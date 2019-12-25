<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Pendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftar_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('form');
        
        require APPPATH.'libraries/PHPMailer/src/Exception.php';
        require APPPATH.'libraries/PHPMailer/src/PHPMailer.php';
        require APPPATH.'libraries/PHPMailer/src/SMTP.php';

        if( ! $this->session->userdata('authenticated')) // Jika tidak ada
            redirect('authentication');
        
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getAllPendaftar();
        /*
        if( $this->input->post('keyword') ) {
            $data['pelanggan'] = $this->Pendaftar_model->cariDataPendaftar();
        }
        */
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftar/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        
        $data['judul'] = 'Form Tambah Data Pendaftar';

        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|numeric|min_length[11]|max_length[12]');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftar/tambah');
            $this->load->view('templates/footer');
        } else if ($this->input->post('tambah')) {

            $upload = $this->Pendaftar_model->upload();

            if($upload['result']=="success"){
                $this->Pendaftar_model->tambahDataPendaftar($upload);
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('pendaftar');
            } else {
                $data['message']=$upload['error'];
            }
        }
    }

    public function validasi($no_daftar)
    {

        $data['judul'] = 'Form Ubah Data Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getPendaftarById($no_daftar);
        $data['no_pelanggan'] = $this->Pendaftar_model->getCountNoPell();
        $data['password'] = $this->Pendaftar_model->getRandomPass();
        
        $this->form_validation->set_rules('no_pelanggan', 'Nomor Pelanggan', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pendaftar/validasi', $data);
            $this->load->view('templates/footer');
        } else {
            
            /*
                $config = [
                    'mailtype'  => 'html',
                    'charset'   => 'utf-8',
                    'protocol'  => 'smtp',
                    'smtp_host' => 'ssl://smtp.gmail.com',
                    'smtp_user' => 'hmazud@gmail.com',    
                    'smtp_pass' => '@Mazud_21',
                    'mailtype' => 'text',      
                    'smtp_port' => '465',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE,
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
            
                $this->email->send();

                $this->Pendaftar_model->validasi();
                
                $this->session->set_flashdata('flash', 'Tervalidasi');
                redirect('pelanggan');
        }
        */

           // PHPMailer object
           $response = false;
           $mail = new PHPMailer();
         
          //SMTP configuration
          $mail->isSMTP();
          $mail->Host     = 'smtp.gmail.com'; //sesuaikan sesuai nama domain hosting/server yang digunakan
          $mail->SMTPAuth = true;
          $mail->Username = 'hmazud@gmail.com'; // user email
          $mail->Password = '@Mazud_21'; // password email
          $mail->SMTPSecure = 'ssl';
          $mail->Port     = 465;
  
          //data dari form validasi view
          $to_email = $this->input->post('email');   
          $message = $this->input->post('message');

          $mail->setFrom('no-reply@pdam.com', 'PDAM Kabupaten Bantul'); // user email
          //$mail->addReplyTo('xxx@hostdomain.com', ''); //user email
  
          // Add a recipient
          $mail->addAddress(/*'linux96mint@gmail.com'*/$to_email); //email tujuan pengiriman email
  
          // Email subject
          $mail->Subject = 'Validasi Nomor Pelanggan & Password'; //subject email
  
          // Set email format to HTML
          $mail->isHTML(true);
  
          // Email body content
          $mailContent = $message; // isi email
          $mail->Body = $mailContent;
  
          // Send email
          /*
          if(!$mail->send()){
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          }else{
              echo 'Message has been sent';
          }
          */
          // Send email
          $mail->send();

          $this->Pendaftar_model->validasi();
                
          $this->session->set_flashdata('flash', 'Tervalidasi');
          redirect('pelanggan');
        }
    }
    
    public function hapus($no_daftar)
    {
        $this->Pendaftar_model->hapusDataPendaftar($no_daftar);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pendaftar');
    }

    public function detail($no_daftar)
    {
        $data['judul'] = 'Detail Data Pendaftar';
        $data['pelanggan'] = $this->Pendaftar_model->getPendaftarById($no_daftar);
        $this->load->view('templates/header', $data);
        $this->load->view('pendaftar/detail', $data);
        $this->load->view('templates/footer');
    }
}
