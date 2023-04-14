<?php
class Proker extends MY_Controller
{
    public function p_proker()
    {
        if($this->session->userdata('Divisi') == "ketua" || $this->session->userdata('Divisi') == "wakil ketua"){
            $lihatProker = $this->data_model->dataget('proker')->result_array();
        } else {
            $this->db->where('divisi',$this->session->userdata('Divisi'));
            $lihatProker = $this->data_model->dataget('proker')->result_array();
        }

        $data['proker'] = $lihatProker;

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();

        $this->db->order_by('tanggal','DESC');
        $data['jumlahProker'] = $this->data_model->dataget('proker');

        $data['title'] = 'Proker | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
        
  
        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
            $this->load->view('layout/admin/header',$data);;
            $this->load->view('admin/v_proker',$data);
        } else {
            $this->load->view('layout/users/header',$data);
            $this->load->view('users/v_proker',$data);
        }

    $this->load->view('layout/users/footer');
    }

    public function input_proker()
    {
        $id = mt_rand(100000,999999);
        $namaproker = $this->input->post('namaproker');
        $tanggal = $this->input->post('tanggal');
        $alasan = $this->input->post('alasan');
        $divisi = $this->session->userdata('Divisi');
        $status = "Belum disetujui";    
        
        $arrayData = array(
            'id' => $id,
            'divisi' => $divisi,
            'namaproker' => $namaproker,
            'tanggal' => $tanggal,
            'alasan' => $alasan,
            'status' => $status
        );

        $this->data_model->datainsert('proker',$arrayData);

        $this->session->set_flashdata('berhasil_proker', '<div class="alert alert-success">Berhasil Mengajukan Proker</div>');
        redirect('pages/proker');
    }

    public function delete_proker($id)
    {
        $where = array('id' => $id);
        $this->db->where($where);
        $this->data_model->datadelete('proker');

        $this->session->set_flashdata('berhasil_proker', '<div class="alert alert-success">Berhasil Hapus Proker</div>');

        redirect('pages/proker');
    }

    public function confirm_proker($id)
    {
        if($this->input->post('submit') == "Konfirmasi"){
            $status = "Disetujui";
        } else if ($this->input->post('submit') == "Ditolak"){
            $status = "Ditolak";
        }

        $where = array('id' => $id);
        $arrayData = array('status' => $status);
        $this->data_model->dataupdate('proker',$arrayData,$where);

        redirect('pages/proker');
    }
}
?>