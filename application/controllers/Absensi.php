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

        $this->db->where('keterangan', 'Hadir');
        $this->db->where('tngl',$a);
        $this->db->where('nim',$nim);
        $absensi = $this->data_model->dataget('absensi');

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['tanggalJ'] = $ambilJam;
        $data['absensia'] = $absensi;
        
        $this->db->order_by('tngl','DESC');
        $data['jumlahAbsen'] = $this->data_model->dataget('absensi');

        $data['title'] = 'Absensi | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';
        

        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
                $this->load->view('layout/admin/header',$data);;
                $this->load->view('admin/v_absen',$data);
            } else {
                $this->load->view('layout/users/header',$data);
                $this->load->view('users/v_absensi',$data);
            }
        $this->load->view('layout/users/footer');
    }

    public function input_absen()
    {
        $nim = $this->session->userdata('Nim');
        $nama = $this->session->userdata('Nama');
        $divisi = $this->session->userdata('Divisi');

        $ambilJam = $this->data_model->dataget('buatabsen');
        foreach($ambilJam->result_array() as $x):
            $tanggal = $x['tanggal'];
            $jam = $x['jam'];
        endforeach;
        
        if($this->input->post('submit') !== ""){

            $id_absen = mt_rand(1000,9999);
            $keterangan = "Hadir";

            $arrayData = array(
                'id_absen' => $id_absen,
                'nim' => $nim,
                'nama' => $nama,
                'divisi' => $divisi,
                'tngl' => $tanggal,
                'jam_skrng' => $jam,
                'keterangan' => $keterangan
            );
            if(!$this->data_model->datainsert('absensi',$arrayData)){
                $this->session->set_flashdata('abnsensi_gagal', '<div class="alert alert-danger">Gagal Absen</div>');
                redirect('absensi');
            } else{
                $this->session->set_flashdata('absensi_berhasil', '<div class="alert alert-success">Berhasil Absen</div>');
                redirect('absensi');
            }

        }

    }

    public function buatAbsen()
    {
        if(!$this->session->userdata('Divisi') == "sekretaris"){
            $this->session->set_flashdata('gagal_buat_absen', '<div class="alert alert-warning">Anda bukan sekretaris</div>');
        }else{
            $this->session->set_flashdata('berhasil_buat_absen', '<div class="alert alert-success">Berhasil Buat Absen</div>');
            $this->data_model->buatAbsens();
        }
        redirect('absensi');   
        
    }

    //Fungsi yang ada di halaman admin
    public function delete_absen($id_absen)
    {
        $where = array('id_absen' => $id_absen);

        $this->data_model->datadelete('absensi',$where);

        $this->session->set_flashdata('berhasil_absen', '<div class="alert alert-success">Berhasil Hapus Data Absensi</div>');

        redirect('absensi');
    }

}
?>