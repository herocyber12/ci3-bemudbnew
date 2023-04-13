<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller
{
    public function index()
    {
            $lokasi = base_url('asset/images/foto_profil/$rows[foto_profil]');
            $lokasi1 = base_url('asset/images/woman.png');
            
            $data['lokasinya'] = $lokasi;
            $data['lokasinya1'] = $lokasi1;
            $data['autoDelet'] = $this->data_model->autoDeletion();
            $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
            $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
            $data['jumlahAnggta'] = $this->data_model->data_count_all('loginuser');
            $data['jumlahProker'] = $this->data_model->data_count_all('proker');

            $data['title'] = 'Home Admin | BEM UDB';
            $data['keyword'] = 'bem udb';
            $data['description'] = 'Website resmi bem udb';
            
            if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
                $this->load->view('layout/admin/header',$data);
                $this->load->view('admin/v_utama',$data);
            } else {
                $this->load->view('layout/users/header',$data);
                $this->load->view('users/v_utama',$data);
            }
            $this->load->view('layout/users/footer');
    }
}
?>