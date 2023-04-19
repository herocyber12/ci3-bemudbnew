<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller
{
    public function index()
    {
            $data['autoDelet'] = $this->data_model->autoDeletion();
            $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
            $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
            $data['jumlahAnggta'] = $this->data_model->data_count_all('loginuser');
            $data['jumlahProker'] = $this->data_model->data_count_all('proker');

            $data['title'] = 'Dashboard | BEM UDB';
            $data['keyword'] = 'bem udb';
            $data['description'] = 'Website resmi bem udb';
            
            if($this->session->userdata('Divisi') == "Admin"){
                $this->load->view('layout/admin/header',$data);;
                $this->load->view('admin/v_utama',$data);
            } else {
                $this->load->view('layout/users/header',$data);
                $this->load->view('users/v_utama',$data);
            }
            $this->load->view('layout/users/footer');
    }

    public function delete_anggota($uid)
    {
        $where = array('uid' => $uid);
        $this->db->where($where);
        if($this->data_model->datadelete('id_profil', $where)){
            $this->db->where($where);
            $this->data_model->datadelete('loginuser', $where);
            // $this->session->set_flashdata('gagal_hapus_anggota', '<div class="alert alert-danger">Tidak Bisa Menghapus Admin !</div>');
            $this->session->set_flashdata('gagal_hapus_anggota', '<div class="alert alert-success">Berhasil Hapus Anggota !</div>');
            redirect('home');
        } else {
            $this->session->set_flashdata('pesan_hapus', '<div class="alert alert-success">Berhasil Menghapus Anggota</div>');
            redirect('home');
        }
    }

    public function update_anggota()
    {
        $uid = $this->input->post('uid');
        $arrayData = array(
            'uid' => $this->input->post('uid'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'divisi' => $this->input->post('divisi')
        );
        $where = array('uid' => $uid);
        $this->data_model->dataupdate('loginuser',$arrayData, $where);

        $this->session->set_flashdata('berhasil_update', '<div class="alert alert-success">Berhasil Update Profil</div>');
        redirect('home');
    }
}
?>