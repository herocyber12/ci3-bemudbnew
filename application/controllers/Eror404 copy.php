<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    class Eror404 extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url','form','html','security'));
            date_default_timezone_set('Asia/Jakarta');
            
            $this->getdata = $this->data_model->dataget('posting');
            $this->rowdata = $this->data_model->data_count_all('posting');
        }

        public function index()
        {
			$data['title'] = "Error 404 | BEM UDB";
			$data['postingane'] = $this->getdata;
            $data['get_all_p'] = $this->rowdata;

            $this->output->set_status_header('404');
			$this->load->view('layout/header', $data);
            $this->load->view('eror404');
			$this->load->view('layout/footer');
        }
    }
?>