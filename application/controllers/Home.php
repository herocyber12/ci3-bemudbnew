<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller
{
    public function index()
    {
        if($this->input->post('submit') == "close")
        {
          $arrayData = array('changelog_view' => 1);
          $where = array('uid' => $this->session->userdata('Uid'));
          $this->data_model->dataupdate('loginuser',$arrayData,$where);
        }

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

    public function export(){
        $nama_file = $this->input->post('nama_file');
        $jenis_export = $this->input->post('jenis_export');
        // nama file
        $filename=$nama_file.date('Y-m-d').".xls";
        
        //header info for browser
        header("Content-Type: application/vnd-ms-excel"); 
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        
        //menampilkan data sebagai array dari tabel produk
            // $this->db->where('divisi', $this->session->userdata('Divisi'));
            $sql= $this->data_model->dataget($jenis_export);

        foreach($sql->result_array() as $data)
        $out[]=$data;
    
        $show_coloumn = false;
        foreach($out as $record) {
        if(!$show_coloumn) {
        //menampilkan nama kolom di baris pertama
        echo implode("\t", array_keys($record)) . "\n";
        $show_coloumn = true;
        }
        // looping data dari database
        echo implode("\t", array_values($record)) . "\n";
        } exit();
    }

    public function input_postingan()
    {
        $judul = trim($this->input->post('judul'));
        $foto = $_FILES['foto']['name'];
        $config['upload_path'] = './asset/images';
		$config['allowed_types'] = 'jpg|png|jpeg';

        $arrayData = array(
            'posting_judul' => $judul,
            'posting_gambar' => $foto
        );

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('foto')){
            $this->session->set_flashdata('postingan', '<div class="alert alert-danger">Gagal Membuat Postingan</div>');
            redirect('home');
            die;
        } else {
            $foto = $this->upload->data('file_name');
        }
        $this->session->set_flashdata('postingan_berhasil', '<div class="alert alert-success">Berhasil Membuat Postingan</div>');
        $this->data_model->datainsert('posting',$arrayData);

        redirect('home');
    }
}
?>