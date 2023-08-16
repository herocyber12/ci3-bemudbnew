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
        $a = $this->input->post('tanggal');
        $alasan = $this->input->post('alasan');
        $divisi = $this->session->userdata('Divisi');
        $status = "Belum disetujui";    

        
        $d = strtotime($a);
        $tanggal = date("Y-m-d",$d);
        
        $arrayData = array(
            'id' => $id,
            'divisi' => $divisi,
            'namaproker' => $namaproker,
            'tanggal' => $tanggal,
            'alasan' => $alasan,
            'status' => $status
        );

        $result = $this->data_model->datainsert('proker',$arrayData);

        if($result){
            $dataProker = $this->data_model->dataget('proker')->result_array();

            $arrayData = array();

            foreach($dataProker as $a){
                $divisi = $a['divisi'];
                $namaproker = $a['namaproker'];
                $tanggal = $a['tanggal'];
                $alasan = $a['alasan'];
                $status = $a['status'];

                $arrayData[] = array(
                    'divisi' => $divisi,
                    'namaproker' => $namaproker,
                    'tanggal' => $tanggal,
                    'alasan' => $alasan,
                    'status' => $status
                );
            }

            echo json_encode(array(
                'status' => 'berhasil',
                'data' => $arrayData
            ));
        }
    }

    public function delete_proker($id)
    {
        $where = array('id' => $id);
        $this->db->where($where);
        $this->data_model->datadelete('proker',$where);

        $this->session->set_flashdata('berhasil_proker', '<div class="alert alert-success">Berhasil Hapus Proker</div>');

        redirect('proker');
    }

    public function confirm_proker($id)
    {
        $where = array('id' => $id);
        $arrayData = array('status' => 'Disetujui');
        $this->data_model->dataupdate('proker',$arrayData,$where);

        redirect('proker');
    }

    public function tolak_proker($id)
    {
        $where = array('id' => $id);
        $arrayData = array('status' => 'Ditolak');
        $this->data_model->dataupdate('proker',$arrayData,$where);

        redirect('proker');
    }
}
?>