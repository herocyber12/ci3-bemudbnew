<?php 
class Artikel extends MY_Controller
{
    public function p_artikel()
    {
        if($this->session->userdata('Divisi') == 'litbang & kastrat' || $this->session->userdata('Divisi') == "sekretaris" || $this->session->userdata('Divisi') == "kominfo" || $this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "ketua"){
            
            $this->db->order_by('tanggal_artikel','DESC');
            $data['jumlahArtikel'] = $this->data_model->dataget('artikel');

            $data['autoDelet'] = $this->data_model->autoDeletion();
            $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
            $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
            $data['title'] = 'Buat Artikel | BEM UDB';
            $data['keyword'] = 'bem udb';
            $data['description'] = 'Website resmi bem udb'; 
            
            if($this->session->userdata('Divisi') == "Admin"){
                $this->load->view('layout/admin/header',$data);
                $this->load->view('admin/v_artikel',$data);
                
            } else {
                $this->load->view('layout/users/header',$data);
                $this->load->view('users/v_buatartikel',$data);
            }
            $this->load->view('layout/users/footer');
        } else {
            $this->session->set_flashdata('bukan_Litbang', '<div class="alert alert-warning">Anda Tidak Bisa ke Halaman Pembuatan Artikel</div>');
            redirect('home');
        }
    }

    public function input_artikel()
    {
        $id = " ";
        $tema = $this->input->post('tema');
        $tanggal = $this->input->post('tanggal');
        $alasan = $this->input->post('alasan');

        $foto = $_FILES['file']['name'];
        $config['upload_path'] = './asset/images';
		$config['allowed_types'] = 'jpg|png|jpeg';

        $arrayData = array(
            'id_artikel' => $id,
            'tema_artikel' => $tema,
            'tanggal_artikel' => $tanggal,
            "gmbr" => $foto,
            'isi_artikel' => $alasan
        );

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('file')){
            $this->session->set_flashdata('bukan_Litbang', '<div class="alert     alert-warning">Anda Tidak Bisa ke Halaman Pembuatan Artikel</div    >');
            redirect('user/beranda');
        } else {
            $foto = $this->upload->data('file_name');
        }

        $this->data_model->datainsert('artikel',$arrayData);

        $this->session->set_flashdata('berhasil_artikel', '<div class="alert alert-success">Berhasil Membuat Artikel</div>');
        redirect('artikel/daftar_artikel');
    }

    public function daftar_artikel()
    {
        $artikel = $this->data_model->dataget('artikel')->result_array();

        $data['artikel'] = $artikel;

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Daftar Artikel | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
        if($this->session->userdata('Divisi') == "Admin"){
            $this->load->view('layout/admin/header',$data);
        } else{
            $this->load->view('layout/users/header',$data);
        }
        $this->load->view('users/v_daftarartikel',$data);
        $this->load->view('layout/users/footer'); 
    }

    public function delete_artikel($id_artikel)
    {
        $where = array('id_artikel' => $id_artikel);

        $this->data_model->datadelete('artikel',$where);

        $this->session->set_flashdata('berhasil_laporan', '<div class="alert alert-success">Berhasil Hapus Artikel</div>');

        redirect('artikel');
    }
}
?>