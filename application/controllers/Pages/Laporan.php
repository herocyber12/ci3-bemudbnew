<?php
class Laporan extends MY_Controller
{
    public function p_laporan()
    {
        $this->db->order_by('tanggal', 'DESC');
        $r_proker = $this->data_model->dataget('laporan_proker')->result_array();

        $this->db->order_by('tanggal', 'DESC');
        $lihatLaporan = $this->data_model->dataget('laporan_keuangan')->result_array();

        
        $data['laporan'] = $lihatLaporan;
        $data['laporan_proker'] = $r_proker;

        $data['sum_lap_keuangan'] = $this->data_model->dataget('laporan_keuangan');
        $data['sum_lap_proker'] = $this->data_model->dataget('laporan_proker');

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Laporan | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 

        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
            $this->load->view('layout/admin/header',$data);;
            $this->load->view('admin/v_laporan',$data);
        } else {
            $this->load->view('layout/users/header',$data);
            $this->load->view('users/v_laporan',$data);
        }
    $this->load->view('layout/users/footer');
    
    }

    public function input_laporan()
    {
        
        $id_laporan = mt_rand(10000,99999);
        $tanggal = $this->input->post('tanggal');
        $logika = $this->input->post('submit');

        if($logika == "keuangan"){
            if($this->session->userdata('Divisi') == "Bendahara" || $this->session->userdata('Divisi') == "bendahara"){

                $id = "IDLK-".$id_laporan;
                
                $arrayData = array(
                    'id_lkeuangan' => $id,
                    'tanggal' => $tanggal,
                    'pemasukan' => $this->input->post('moneyin'),
                    'pengeluaran' => $this->input->post('moneyout'),
                    'keterangan' => $this->input->post('keterangan1')
                );
            
                $this->data_model->datainsert('laporan_keuangan',$arrayData);

                $this->session->set_flashdata('berhasil_buat_laporan', '<div class="alert alert-success">Berhasil Membuat Laporan</div>');

                redirect('laporan');
            } else {
                $this->session->set_flashdata('gagal_buat_laporan_keuangan', '<div class="alert alert-warning">Anda Bukan Bendahara</div>');
                redirect('home');
            }
        } else if($logika == "proker") {
            
            $id = "IDLP-".$id_laporan;

            $arrayData = array(
                'id_lproker' => $id,
                'tanggal' => $tanggal,
                'nama_proker' => $this->input->post('namaproker'),
                'status' => $this->input->post('status'),
                'keterangan' => $this->input->post('keterangan2')
            );

            $this->session->set_flashdata('berhasil_buat_laporan', '<div class="alert alert-success">Berhasil Membuat Laporan</div>');
            $this->data_model->datainsert('laporan_proker',$arrayData);
            redirect('laporan');
        }
    }

    public function del_laporan_proker($id_laporan)
    {
        $where = array('id_lproker' => $id_laporan);
        $this->data_model->datadelete('laporan_proker',$where);

        $this->session->set_flashdata('berhasil_laporan', '<div class="alert alert-success">Berhasil Hapus Laporan</div>');

        redirect('laporan');
    }

    public function del_laporan_keuangan($id_laporan)
    {
        $where = array('id_lkeuangan' => $id_laporan);
        $this->data_model->datadelete('laporan_keuangan',$where);

        $this->session->set_flashdata('berhasil_laporan', '<div class="alert alert-success">Berhasil Hapus Laporan</div>');

        redirect('laporan');
    }
}
?>