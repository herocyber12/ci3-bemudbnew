<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(array('url','form','html','security'));
        date_default_timezone_set('Asia/Jakarta');
        
        $this->getdata = $this->data_model->dataget('posting');
        $this->rowdata = $this->data_model->data_count_all('posting');

    }

    public function index()
    {
        $data['title'] = 'Landing | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

        $this->load->view('layout/header',$data);
		$this->load->view('landing');
		$this->load->view('layout/footer');
    }

    public function berita($id_artikel)
	{
        $this->db->where('id_artikel',$id_artikel);
		$jurnal = $this->data_model->dataget('artikel');
		
		$data['title'] = 'BERITA | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
		$data['berita'] = $jurnal;

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;
		
		$this->load->view('layout/header',$data);
		$this->load->view('berita', $data);
		$this->load->view('layout/footer');
	}

    public function bertialist()
    {
		$jurnal = $this->data_model->dataget('artikel');
		
		$data['title'] = 'BERITA | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
		$data['berita'] = $jurnal;

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;
		
//		$this->load->view('layout/header',$data);
		$this->load->view('beritalist', $data);
//		$this->load->view('layout/footer');
    }

    public function prokerbem()
	{
		$data['title'] = 'PROKER | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
		$data['proker'] = $this->data_model->dataget('proker')->result_array();

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

		$this->load->view('layout/header',$data);
		$this->load->view('prokerbem',$data);
		$this->load->view('layout/footer');
	}

    public function visimisi()
	{
		$data['title'] = 'VISI DAN MISI | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

		$this->load->view('layout/header',$data);
		$this->load->view('visimisibem',$data);
		$this->load->view('layout/footer');
	}

    public function struktur()
	{
		$data['title'] = "Struktur Ormawa UDB | BEM UDB";
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
		
        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

		$this->load->view('layout/header',$data);
		$this->load->view('struktur');
		$this->load->view('layout/footer');
	}
	
	public function contact()
	{
		$data['title'] = "Kontak Kami | BEM UDB";
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';
		
        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

		$this->load->view('layout/header',$data);
		$this->load->view('contact');
		$this->load->view('layout/footer');
	}

    public function login()
	{
		if($this->session->userdata('islogin_in') === true	){
			redirect('home');
			die;
		}

		$data['title'] = 'LOGIN | BEM UDB';
		$data['keyword'] = 'bem udb';
		$data['description'] = 'Website resmi bem udb';

		$this->load->view('login',$data);
	}

    public function ck_logout()
    {
        $this->session->unset_userdata('islogin_in');
        $this->session->unset_userdata('Nim');
        $this->session->unset_userdata('Nama');
        $this->session->unset_userdata('Prodi');
        $this->session->unset_userdata('Divisi');
        $this->session->unset_userdata('foto_profil');

        redirect(base_url('landing/login'));
    }

    public function ck_login()
    {
        $username = $this->input->post('nama');
        $password = $this->input->post('password');
        $password = md5($password);
    
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
        if($this->form_validation->run() == FALSE){
            redirect('login');
            die;
        }
        $this->db->where('username',$username);
        $getLogin = $this->data_model->dataget('id_profil'); 
            if($getLogin->num_rows()>0){
                $cek = $this->data_model->data_login_row($username,$password);
                var_dump($cek);
                if($cek->num_rows() > 0){
                    $b= $cek->result_array();
                    foreach($b as $a):
                       $this->session->set_userdata('islogin_in',true);
                       $this->session->set_userdata('Uid', $a['uid']);
                       $this->session->set_userdata('Nama', $a['nama']);
                       $this->session->set_userdata('Nim', $a['nim']);
                       $this->session->set_userdata('Prodi', $a['prodi']);
                       $this->session->set_userdata('Divisi', $a['divisi']);
                       $this->session->set_userdata('foto_profil', $a['foto_profil']);
    
                       redirect('home');
                    
            endforeach;
            } else{
                $jumlahlogin=0;
                $jumlahlogin++;

                if($jumlahlogin > 3){
                    $this->session->set_flashdata('gagal_login', '<div class="alert alert-danger">Username Atau Password Salah</div>');
                    redirect(site_url('landing'));
                }
            }
        }else{
            $this->session->set_flashdata('gagal_login', '<div class="alert alert-danger">Username Atau Password Salah</div>');
            redirect(base_url('landing/login'));
        }
    }
}
?>