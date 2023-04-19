<?php
class Oprec extends MY_Controller
{
    public function index()
    {
	    $keyword = $this->input->post('search');
	    
		$data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
		
        $this->db->like('nama',$keyword);
        $this->db->or_like('prodi', $keyword);
        $this->db->or_like('no_hp', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('divisi', $keyword);
        $this->db->or_like('status', $keyword);
        
        $this->db->order_by('nama', 'DESC');
		$data['calon'] = $this->data_model->dataget('oprec_bemu');
		
		$data['title'] = 'Daftar Calon Anggota | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
          
		$this->load->view('layout/admin/header',$data);
		$this->load->view('admin/v_oprecbem',$data);
		$this->load->view('layout/users/footer');
	      
    }

    public function konfirmasi_calon($id_oprec)
    {
        $where = array('id_oprec' => $id_oprec);
        $arrayData = array(
            'status' => 'Diterima'
        );
        $this->data_model->dataupdate('oprec_bemu',$arrayData,$where);

        redirect('oprec');
    }

    public function tolak_calon($id_oprec)
    {
        $where = array('id_oprec' => $id_oprec);
        $arrayData = array(
            'status' => 'Ditolak'
        );
        $this->data_model->dataupdate('oprec_bemu',$arrayData,$where);

        redirect('oprec');
    }

    public function delete_calon($id_oprec)
    {
        $where = array('id_oprec' => $id_oprec);
        
		// $this->db->where($where);
		// $unduh = $this->data_model->dataget('oprec_bemu');
		
		// foreach($unduh->result_array() as $a):
		// 	$khs = $a['khs'];
		// 	$passF = $a['pass_foto'];
		// 	$ktm = $a['surat_ktm'];
		// 	$cv = $a['cv'];
		// 	$sportu = $a['sportu'];
			
			
		// unlink(FCPATH.'/asset/images/oprec_bem/'.$khs);
		// unlink(FCPATH.'/asset/images/oprec_bem/'.$passF);
		// unlink(FCPATH.'/asset/images/oprec_bem/'.$ktm);
		// unlink(FCPATH.'/asset/images/oprec_bem/'.$cv);
		// unlink(FCPATH.'/asset/images/oprec_bem/'.$sportu);
		// endforeach;
		
		
        $this->data_model->datadelete('oprec_bemu',$where);

        $this->session->set_flashdata('berhasil_calon', '<div class="alert alert-success">Berhasil Hapus Calon Pendaftar</div>');

        redirect('oprec');
    }
}
?>