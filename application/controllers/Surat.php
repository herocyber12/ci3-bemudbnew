<?php
class Surat extends MY_Controller
{
    public function p_surat()
    {
        $this->db->order_by('jam_surat', 'DESC');
        $this->db->order_by('tanggal_surat','DESC');
        $data['surat'] = $this->data_model->dataget('no_surat')->result_array(); 

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Surat | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
        
  
        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
            $this->load->view('layout/admin/header',$data);;
            $this->load->view('admin/v_surat',$data);
        } else {
            $this->load->view('layout/users/header',$data);
            $this->load->view('users/v_surat',$data);
        }

    $this->load->view('layout/users/footer');
    }

    public function input_surat()
    {
        $id_surat = mt_rand(100000,999999);
		$no_surat 	= $this->input->post('no_surat');
		$tahun = date('Y');
		$bulan = date('m');
        $jam = date('H:i:s');
		switch($bulan){
			case 1:
				$romawi = "I"; 
				break;
			case 2:
				$romawi = "II"; 
				break;
			case 3:
				$romawi = "III"; 
				break;
			case 4:
				$romawi = "IV"; 
				break;
			case 5:
				$romawi = "V"; 
				break;
			case 6:
				$romawi = "VI"; 
				break;
			case 7:
				$romawi = "VII"; 
				break;
			case 8:
				$romawi = "VIII"; 
				break;
			case 9:
				$romawi = "IX"; 
				break;
			case 10:
				$romawi = "X"; 
				break;
			case 11:
				$romawi = "XI"; 
				break;
			case 12:
				$romawi = "XII";
				break;
		}
			
			$surat = "$no_surat/BEM/UDB/$romawi/$tahun";
			$tanggal = $this->input->post('tanggal');
			$alasan = $this->input->post('alasan');

            $arrayData = array(
                'id_surat' => $id_surat,
                'nomor_surat' => $surat,
                'tanggal_surat' => $tanggal,
                'jam_surat' => $jam,
                'kegunaan_surat' => $alasan
            );

            $this->data_model->datainsert('no_surat',$arrayData);

            $this->session->set_flashdata('berhasil_surat', '<div class="alert alert-success">Berhasil Input Arsip Surat</div>');
            redirect('surat');			
    }

    public function delete_surat($id_surat)
    {
        $where = array('id_surat' => $id_surat);

        $this->data_model->datadelete('no_surat',$where);

        $this->session->set_flashdata('berhasil_surat', '<div class="alert alert-success">Berhasil Hapus Surat</div>');

        redirect('surat');
    }

    public function edit_surat($id_surat)
    {
        $this->db->where('id_surat',$id_surat);
        $data['editSurat'] = $this->data_model->dataget('no_surat');
        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Edit Surat | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 
    
        $this->load->view('layout/users/header',$data);;
        $this->load->view('admin/v_editsurat',$data);
        $this->load->view('layout/users/footer');
    }

    public function updateSurat()
    {
        $id_surat = $this->input->post('id_surat');
        $no_surat 	= $this->input->post('nomor_surat');
        $arrayData = array(
            'nomor_surat' => $no_surat,
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'kegunaan_surat' => $this->input->post('kegunaan_surat')
        );

        var_dump($arrayData);

        $where = array('id_surat' => $id_surat);
        $this->data_model->dataupdate('no_surat',$arrayData, $where);
        $this->session->set_flashdata('berhasil_edit', '<div class="alert alert-success">Berhasil Edit Surat</div>');

        redirect('surat');
    }
}
?>