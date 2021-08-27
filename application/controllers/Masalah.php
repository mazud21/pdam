<?php

class Masalah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masalah_model');
        $this->load->library('form_validation');
        if( ! $this->session->userdata('authenticated')) 
            redirect('authentication');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Masalah';
        $data['masalah_air'] = $this->Masalah_model->getAllMasalah();
        if( $this->input->post('keyword') ) {
            $data['masalah_air'] = $this->Masalah_model->cariDataMasalah();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('masalah/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Masalah Air';

        $this->form_validation->set_rules('wilayah', 'Wilayah', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('estimasi', 'Estimasi', 'required');
        $this->form_validation->set_rules('est_mulai', 'Waktu Mulai', 'required');
        $this->form_validation->set_rules('est_selesai', 'Waktu Selesai', 'required');
        $this->form_validation->set_rules('kerusakan', 'Kerusakan', 'required');
        $this->form_validation->set_rules('alternatif', 'Alternatif', 'required');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_masalah', $data);
            $this->load->view('masalah/tambah');
            $this->load->view('templates/footer_masalah');
        } else {
            $this->Masalah_model->tambahDataMasalah();
            $this->sendNotifMemo();
            $this->sendNotifMasalah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('masalah');
        }
    }

    public function hapus($no_info)
    {
        $this->Masalah_model->hapusDataMasalah($no_info);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('masalah');
    }

    public function detail($no_info)
    {
        $data['judul'] = 'Detail Data Masalah';
        $data['masalah_air'] = $this->Masalah_model->getMasalahById($no_info);
        $this->load->view('templates/header', $data);
        $this->load->view('masalah/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($no_info)
    {
        $data['judul'] = 'Form Ubah Data Masalah';
        $data['no_info'] = $this->Masalah_model->getMasalahById($no_info);
        
        $this->form_validation->set_rules('no_info', 'Nomor Masalah', 'required');
        $this->form_validation->set_rules('wilayah', 'wilayah', 'required');
        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('estimasi', 'estimasi', 'required');
        $this->form_validation->set_rules('est_mulai', 'Waktu Mulai', 'required');
        $this->form_validation->set_rules('est_selesai', 'Waktu Selesai', 'required');
        $this->form_validation->set_rules('kerusakan', 'kerusakan', 'required');
        $this->form_validation->set_rules('alternatif', 'Alternatif', 'required');
        $this->form_validation->set_rules('penanganan', 'Penanganan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_masalah', $data);
            $this->load->view('masalah/ubah', $data);
            $this->load->view('templates/footer_masalah');
        } else {
            $this->sendNotifMemo();
            $this->Masalah_model->ubahDataMasalah();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('masalah');
        }
    }

    public function sendNotifMasalah()
    {
        $wilayah = $this->input->post('wilayah');

        // API access key from Google API's Console
        define('API_ACCESS_KEY', 'AIzaSyAuS070ZBgLi6hEOs6v7vFmzMAh7csl-nQ');
        // prep the bundle

            $msg = array(
            'title' => 'Info Masalah Air',
            'body' => $wilayah,
            'clickAction' => 'android.intent.action.TARGET_NOTIFICATION',
            'priority' => 'high',
            'sound' => 'default',
            'time_to_live' => 3600
            );

        $fields = array
        (
            'to' => '/topics/infomasalah', 
            'data' => $msg
        );

        $headers = array
        (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

            $result = curl_exec($ch);
            curl_close($ch);

            echo $result;
	        var_dump($fields);
    }
    
    //push notif FCM
    public function sendNotifMemo()
    {
        $wilayah = $this->input->post('wilayah');
        $kerusakan = $this->input->post('kerusakan');
        
        // API access key from Google API's Console => Cloud Messaging
        define('API_ACCESS_KEY', 'AAAACyyRMqo:APA91bH-R5RUiRDwlYKDfEjszNLmJwaq0l67CO_aQoOAZQv3i-VBfuYl8YgpFCvsDYJPj5k7lhVe4XvxHv2aHCAbSLywSybhV0KPZrj0obO_nBkHq4CQTFfjmF0e9KVqh4nYH_gCPwzv');
        
        // prep the bundle

            $msg = array(
            'title' => $wilayah,
            'body' => $kerusakan
            );
            
            //field untuk menambahkan berbagai macam data
            $data = array(
                'click_action'=> "FLUTTER_NOTIFICATION_CLICK",
                'screen'=> "memo",//or secondScreen or thirdScreen
                'kyano'=> "000000000000000" //0652200513051296 000000000000000
                );
                
            $dataKyano = array();

        $fields = array
        (
            'to' => '/topics/memo',
            'notification' => $msg,
            'data' => $data
        );

        $headers = array
        (
            'Authorization: key='.API_ACCESS_KEY,
            'Content-Type: application/json'
        );

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

            $result = curl_exec($ch);
            curl_close($ch);

            echo $result;
	        var_dump($fields);
    }
}
