<?php 
class Absensi extends MY_Controller
{
    public function p_absensi()
    {
        $nim = $this->session->userdata('Nim');

        $ambilJam = $this->data_model->dataget('buatabsen');
        foreach($ambilJam->result_array() as $x):
            $a = $x['tanggal'];
        endforeach;

        $this->db->where('tngl',$a);
        $this->db->where('nim',$nim);
        $absensi = $this->data_model->dataget('absensi');

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['tanggalJ'] = $ambilJam;
        $data['absensia'] = $absensi;
        $this->db->order_by('tngl','DESC');
        $data['jumlahAbsen'] = $this->data_model->data_count_all('absensi');

        $data['title'] = 'Absensi | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';
        

        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
                $this->load->view('layout/users/header',$data);;
                $this->load->view('admin/v_absen',$data);
            } else {
                $this->load->view('layout/users/header',$data);
                $this->load->view('users/v_absensi',$data);
            }
        $this->load->view('layout/users/footer');
    }

    public function buatAbsen()
    {
        if(!$this->session->userdata('Divisi') == "sekretaris"){
            $this->session->set_flashdata('berhasil_buat_absen', '<div class="alert alert-success">Berhasil Buat Absen</div>');
        }else{
            $this->session->set_flashdata('gagal_buat_absen', '<div class="alert alert-warning">Anda bukan sekretaris</div>');
            $this->data_model->buatAbsens();
        }
        redirect('pages/home/');   
        
    }

    //Fungsi yang ada di halaman admin
    public function delete_absen($id_absen)
    {
        $where = array('id_absen' => $id_absen);

        $this->data_model->datadelete('absensi',$where);

        $this->session->set_flashdata('berhasil_absen', '<div class="alert alert-success">Berhasil Hapus Data Absensi</div>');

        redirect('pages/absensi');
    }

}
?>