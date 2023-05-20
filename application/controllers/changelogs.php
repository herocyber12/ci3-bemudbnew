<?php 
class Changelogs extends MY_Controller
{
    public function index()
    {
        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        
        $data['title'] = 'Buat ChangeLog | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
            
        $this->load->view('layout/admin/header',$data);
        $this->load->view('admin/v_buatchangelog',$data);
        $this->load->view('layout/users/footer');
    }

    public function input_changelog()
    {
        $arrayData = array(
            'versi' => $this->input->post('versi'),
            'tanggal' => date("Y-m-d"),
            'new' =>  $this->input->post('new')
        );

        $this->data_model->buatChangelog($arrayData);

        $this->session->set_flashdata('changelog_berhasil', '<div class="alert alert-success">Berhasil Memperbarui ChangeLog</div>');
        redirect('changelogs');
    }
}
?>