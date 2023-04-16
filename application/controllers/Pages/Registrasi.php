<?php
class Registrasi extends MY_Controller
{
    public function index()
    {

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Tambah Anggota | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
      
        $this->load->view('layout/admin/header',$data);
        $this->load->view('admin/v_tambah',$data);
        $this->load->view('layout/users/footer');
    }

    public function cari()
	{
		
		$data['title'] = 'Registrasi | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
		
		$this->load->view('cari',$data);
	}

    public function register()
	{
		$nama = $this->input->post('cari');

        $this->db->where('nama',$nama);
		$cek = $this->data_model->dataget('loginuser');

        
		$data['calon'] = $cek;
        $data['title'] = 'Registrasi | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';

        foreach($cek->result_array() as $a){
            $nim = $a['nim'];
        }

        var_dump($nim);
        if(!$cek){
            $this->session->set_flashdata('gagal_nama', '<div class="alert alert-danger">Nama Tidak Ditemukan</div>');
            redirect(base_url('landing/login'));
            
        } else{
            if(empty($nim)){
                $this->load->view('regist',$data);
            } else {
                $this->session->set_flashdata('gagal_nama1', '<div class="alert alert-success">Anda Sudah Memiliki Akun</div>');
                redirect(base_url('landing/login'));
                
            } 
        }
	}

    public function input_anggota()
    {

        $a = mt_rand(0000,9999);
        $uid = "UID-$a";
        $arrayData = array(
            'uid' => $uid,
            'nama' => $this->input->post('nama'),
            'divisi' => $this->input->post('divisi')
        );

        $this->data_model->datainsert('loginuser',$arrayData);

        $this->session->set_flashdata('berhasil_tambah_anggota', '<div class="alert alert-success">Berhasil Menambah Anggota</div>');

        redirect('pages/registrasi');
        
    }
}
?>