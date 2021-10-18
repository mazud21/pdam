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
            //->sendNotifMasalah();
            $this->sendNotifMemo();
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
            //$this->sendNotifMasalah();
            
            $data = $this->Masalah_model->ubahDataMasalah();
            if ($data > 0){
                $this->sendNotifMemo();
                $this->session->set_flashdata('flash', 'Yeay! data berhasil diubah');
                redirect('masalah');
            } else {
                $this->session->set_flashdata('flash', 'Ups! data gagal diubah');
                redirect('masalah');

            }
            
        }
    }

    public function sendNotifMasalah()
    {
        $wilayah = $this->input->post('wilayah');
        $kerusakan = $this->input->post('kerusakan');

        // API access key from Google API's Console
        define('API_ACCESS_KEY', 'AAAACyyRMqo:APA91bE5USwfRnJijasIj_mgrDZxa5AAlEkHY7HeBJ0nokFgk9FN-6wZMybY0X2INqpQboEafAKkt4YY2sYgDoVgZG9EUlCkteS4w_XfaBzzR4oXa8IBoqEOLaqCTRnIMrrFsituLLcX');
        // prep the bundle

            $msg = array(
            'title' => $wilayah,
            'body' => $kerusakan
            );
            
            //field untuk menambahkan berbagai macam data
            $data = array(
                'click_action'=> "android.intent.action.TARGET_NOTIFICATION",
                'screen'=> "infomasalah",//or secondScreen or thirdScreen
                'kyano'=> "0652200513051296" //0652200513051296 000000000000000
                );
                
            $dataKyano = array();
            
            $mimasud = 'dKHG2nXemGM:APA91bG_c2YIaIBCQ1urLeCIfJ_osw79JI7NvbLY7GXrO8xzplB2h2k6HGwCmnj09ExgKlx6bfufrdrabqEhB6LvWmwjsLitrwmazj15C5qqqsMMqjOUdK4cXDDMx7JxUmzDOd0GxC5M';
            
            $iphone6p = 'cs1cwtAjWkwUsPjZoKa29m:APA91bHMX-_wEWKMLwq4wBS7mMm2gBd8ppArKt5ggqrqNGGydp-cOqQbI0QffMXQZvXEgmOThaznf9HXWidlKk-vUUKyXgQQNCfwS4QKdprFGEPM0zKz_fCpCoQFxLdKIopB990uYrLL';
            
            $devices = array($iphone6s, $iphone6p);
            
            $jenis = '';
            
            if($jenis == 'single'){
                
                $fields = array
        (
            'to' => $iphone6s,
            'notification' => $msg,
            'data' => $data
        );

            } else if($jenis == 'multiple') {
                
                $fields = array
        (
            //'to' => '/topics/memo',
            'registration_ids' => $devices,
            'notification' => $msg,
            'data' => $data
        );
                
            } else {
                
                $fields = array
        (
            'to' => '/topics/infomasalah',
            'notification' => $msg,
            'data' => $data
        );
                
            }

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
        define('API_ACCESS_KEY', 'AAAACyyRMqo:APA91bE5USwfRnJijasIj_mgrDZxa5AAlEkHY7HeBJ0nokFgk9FN-6wZMybY0X2INqpQboEafAKkt4YY2sYgDoVgZG9EUlCkteS4w_XfaBzzR4oXa8IBoqEOLaqCTRnIMrrFsituLLcX');
        
        // prep the bundle

            $msg = array(
            'title' => $wilayah,
            'body' => $kerusakan
            );
            
            //field untuk menambahkan berbagai macam data
            $data = array(
                'click_action'=> "android.intent.action.TARGET_NOTIFICATION", //android.intent.action.TARGET_NOTIFICATION || FLUTTER_NOTIFICATION_CLICK
                'screen'=> "memo",//or secondScreen or thirdScreen
                'kyano'=> "0652200513051296" //0652200513051296 000000000000000
                );
                
            $dataKyano = array();
            
            $iphone6s = 'eYcGJ-SCUkKTngL-V03f_B:APA91bFOYU2cRHf_10Z9CRnO7IERpCtkieU0WStSTjzx5i0G2W2Ob7Yggqgfkm5_-X8Vc_hcbZVu5KPgBIlkys8WWVkppWGddcmNvhaKepcHbm5Rro5j37ufZEdjOCmGNmzwMYEamnXe';
            
            $iphone6p = 'cs1cwtAjWkwUsPjZoKa29m:APA91bHMX-_wEWKMLwq4wBS7mMm2gBd8ppArKt5ggqrqNGGydp-cOqQbI0QffMXQZvXEgmOThaznf9HXWidlKk-vUUKyXgQQNCfwS4QKdprFGEPM0zKz_fCpCoQFxLdKIopB990uYrLL';
            
            $mimasud ='e9r1l_kj63A:APA91bEmaOWOmIrfTijBhdCGT0_9m_M4MO5PGLh7PKGeg-46IZXAnvGtwsC2RU3sJ1errOp3Fpm9LBNi3lqgZqoP-2PjNbhfLnzWCCiWNOVTYtzwvxhs0HqnMVkeHdBxFYXNoT09nLad';
            
            $lolipoop = 'f5l1vra5VzM:APA91bGarQVLPvCjrvNvFaRrypRjVFnwQTtvOR03KvaJkuu4sJpYqe5RufWalNbMJwAvtlGnE5-bjppv5XUA8cqX5WTuq6Nsd5edOYa79TizCYz1-OZXs8QQe7qLntwMFvIUQ09ojUYg';
            
            $sunmi = 'eTJwOvJYLfk:APA91bFzaWgHHExC2rPCfplXtD86j_2tAg0LHQhC2z2DRduw3ciiebuBbSjzmbMfw1UQotXRrbUlxhOgXi0T2OnSw6KzsS9ezzLalGNoFDZglhGZxpofrB-slpONEiN0-tSFddau4bIB';
            
            $devices = array($lolipoop, $sunmi, $iphone6p); //$iphone6s, 
            
            $jenis = 'single'; //multiple, single, ''
            
            if($jenis == 'single'){
                
                $fields = array
        (
            'to' => $mimasud,
            'notification' => $msg,
            'data' => $data
        );

            } else if($jenis == 'multiple') {
                
                $fields = array
        (
            //'to' => '/topics/memo',
            'registration_ids' => $devices,
            'notification' => $msg,
            'data' => $data
        );
                
            } else {
                
                $fields = array
        (
            'to' => '/topics/test_notif',
            'notification' => $msg,
            'data' => $data
        );
                
            }

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
