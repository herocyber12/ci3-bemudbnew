<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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

        $this->load->view('layout/header', $data);
        $this->load->view('landing/landing');
        $this->load->view('layout/footer');
    }

    public function berita($id_artikel)
    {
        $this->db->where('id_artikel', $id_artikel);
        $jurnal = $this->data_model->dataget('artikel');

        $data['title'] = 'BERITA | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';
        $data['berita'] = $jurnal->result_array();

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

        $this->load->view('layout/header', $data);
        $this->load->view('landing/berita', $data);
        $this->load->view('layout/footer');
    }

    public function beritalist()
    {
        $jurnal = $this->data_model->dataget('artikel');

        $data['title'] = 'BERITA | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';
        $data['berita'] = $jurnal->result_array();

        $data['cover'] = "../../asset/images/cover.jpg";
        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

        $this->load->view('layout/header', $data);
        $this->load->view('landing/beritalist', $data);
        $this->load->view('layout/footer');
    }

    public function prokerbem()
    {
        $data['title'] = 'PROKER | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';
        $data['proker'] = $this->data_model->dataget('proker')->result_array();

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

        $this->load->view('layout/header', $data);
        $this->load->view('landing/prokerbem', $data);
        $this->load->view('layout/footer');
    }

    public function struktur()
    {
        $data['title'] = "Struktur Ormawa UDB | BEM UDB";
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

        $this->load->view('layout/header', $data);
        $this->load->view('landing/struktur');
        $this->load->view('layout/footer');
    }

    public function contact()
    {
        $data['title'] = "Kontak Kami | BEM UDB";
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';

        $data['postingane'] = $this->getdata;
        $data['get_all_p'] = $this->rowdata;

        $this->load->view('layout/header', $data);
        $this->load->view('landing/contact');
        $this->load->view('layout/footer');
    }

    public function login()
    {
        if($this->session->userdata('islogin_in') === true) {
            redirect('home');
            die;
        }

        $data['name_csrf'] = $this->security->get_csrf_token_name();
        $data['hash_csrf'] = $this->security->get_csrf_hash();
        $data['title'] = 'LOGIN | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';

        $this->load->view('layout/login/header', $data);
        $this->load->view('login/login', $data);
        $this->load->view('layout/login/footer');
    }


    public function cari_username()
    {

        $data['title'] = 'Cari Username | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb';

        $this->load->view('layout/login/header', $data);
        $this->load->view('login/cari_username', $data);
        $this->load->view('layout/login/footer');
    }

    public function ganti_password()
    {

        $username = $this->input->post('username');
        $this->db->where('username', $username);
        $getLogin = $this->data_model->dataget('id_profil');
        if(empty($getLogin->num_rows())) {
            $this->session->set_flashdata('username_tidak_ada', '<div class="alert alert-danger">Username tidak ditemukan</div>');
            redirect('landing/cari_username');
        } else {

            $data['username'] = $username;
            $data['title'] = 'Ganti Password | BEM UDB';
            $data['keyword'] = 'bem udb';
            $data['description'] = 'Website resmi bem udb';

            $this->session->set_flashdata('username_ada', '<div class="alert alert-success">Username Ditemukan</div>');

            $this->load->view('layout/login/header', $data);
            $this->load->view('login/ganti_password', $data);
            $this->load->view('layout/login/footer');
        }
    }

    public function ck_password()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password = md5($password);

        $arrayData = array(
            'password' => $password
        );

        $where = array('username' => $username);
        $result = $this->data_model->dataupdate('id_profil', $arrayData, $where);

        if($result > 0) {
            $this->session->set_flashdata('ganti_password', '<div class="alert alert-success">Ganti Password Berhasil</div>');
            redirect('landing/login');
        }
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
                if($cek->num_rows() > 0){
                    $b= $cek->result_array();
                    foreach($b as $a):
                        $this->session->set_userdata('islogin_in', true);
                        $this->session->set_userdata('Uid', $a['uid']);
                        $this->session->set_userdata('Nama', $a['nama']);
                        $this->session->set_userdata('Nim', $a['nim']);
                        $this->session->set_userdata('Prodi', $a['prodi']);
                        $this->session->set_userdata('Divisi', $a['divisi']);
                        $this->session->set_userdata('foto_profil', $a['foto_profil']);

                        redirect('home');

                    endforeach;
                }
            } else {
                $this->session->set_flashdata('gagal_login', '<div class="alert alert-danger">Username Atau Password Salah</div>');
                redirect(base_url('landing/login'));
            }
    }
}
?>