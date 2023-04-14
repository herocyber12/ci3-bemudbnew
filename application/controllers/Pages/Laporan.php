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
        
        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Laporan | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
        
  
        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
            $this->load->view('layout/users/header',$data);;
            $this->load->view('admin/v_laporan',$data);
        } else {
            $this->load->view('layout/users/header',$data);
            $this->load->view('users/v_laporan',$data);
        }
    $this->load->view('layout/users/footer');
    
    }
}
?>