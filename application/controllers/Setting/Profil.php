<?php
class Profil extends MY_Controller
{
    public function index()
	{
		$uid = $this->session->userdata('Uid');

        $this->db->where('uid', $uid);
		$c=$this->data_model->dataget('loginuser');
		
        $uid = $this->session->userdata('Uid');
        
        $img2 = base_url('asset/images/foto_profil/$rows[foto_profil]');
        $lokasi2 = img($img2);
        $img3 = base_url('asset/images/woman.png');
        $lokasi3 = img($img3);
        
        $data['lokasinya'] = $lokasi2;
        $data['lokasinya1'] = $lokasi3;
        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
		$data['profil'] = $c;

		$data['title'] = 'Profil | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';

        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
            $this->load->view('layout/admin/header',$data);
            $this->load->view('setting_profil', $data);
        } else {
            $this->load->view('layout/users/header',$data);
            $this->load->view('setting_profil', $data);
        }
    $this->load->view('layout/users/footer');
	}

    public function updateFotoProfil()
	{
		$uid= $this->session->userdata('Uid');
		$this->db->where('uid', $uid);
		$x = $this->data_model->dataget('loginuser')->result_array();

        foreach($x as $f):

		$foto_profil = $f['foto_profil'];
         endforeach;

        $foto = trim($_FILES['foto']['name']);
        $config['upload_path'] = './asset/images/foto_profil';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$path = 'asset/images/foto_profil/'.$foto_profil;
        $arrayData = array(
            'foto_profil' => $foto
        );

        $this->load->library('upload',$config);

        if(!$this->upload->do_upload('foto')){
            $this->session->set_flashdata('gagal_ganti', '<div class="alert alert-danger">Gagal mengganti foto profil</div>');
        redirect('setting/profil');
        } else {
            $foto = $this->upload->data('file_name');
        }

		if (!empty($foto_profil)) {
			if(unlink($path)){
				if(!$this->upload->do_upload('foto')){
					$this->session->set_flashdata('gagal_ganti', '<div class="alert alert-danger">Gagal mengganti foto profil</div>');
                redirect('setting/profil');
				} else{
					$foto = $this->upload->data('file_name');
				}
                $this->session->set_flashdata('berhasil_fotoP', '<div class="alert alert-success">Berhasil Mengganti Foto Profil</div>');
                $where = array('uid' => $uid);
				$this->data_model->dataupdate('loginuser',$arrayData,$where);
                redirect('setting/profil');
			}else{
                $this->session->set_flashdata('gagal_ganti', '<div class="alert alert-danger">Gagal mengganti foto profil</div>');
                redirect('setting/profil');
            } 
		} else{
            $this->session->set_flashdata('berhasil_fotoP', '<div class="alert alert-success">Berhasil Mengganti Foto Profil</div>');
			$this->db->where('uid', $uid);
            $this->data_model->datainsert('loginuser',$arrayData);
		    redirect('setting/profil');
		}
	}

    public function update_data()
	{	
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$no_hp = $this->input->post('no_hp');
		$uid = $this->session->userdata('Uid');

		$arrayData = array(
			'nama' => $nama,
			'prodi' => $prodi,
			'no_hp' => $no_hp,
		);

        $where = array('uid' => $uid);
		$this->data_model->dataupdate( 'loginuser',$arrayData,$where);
        $this->session->set_flashdata('berhasil_update', '<div class="alert alert-success">Berhasil Update Profil</div>');
		redirect('setting/profil');
	}
}
?>