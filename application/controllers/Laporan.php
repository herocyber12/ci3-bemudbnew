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

        $data['sum_lap_keuangan'] = $this->data_model->dataget('laporan_keuangan');
        $data['sum_lap_proker'] = $this->data_model->dataget('laporan_proker');

        $data['autoDelet'] = $this->data_model->autoDeletion();
        $data['notifikasi']= $this->data_model->dataget('notifikasi')->num_rows();
        $data['notifi'] = $this->data_model->dataget('notifikasi')->result_array();
        $data['title'] = 'Laporan | BEM UDB';
        $data['keyword'] = 'bem udb';
        $data['description'] = 'Website resmi bem udb'; 

        if($this->session->userdata('Divisi') == "Admin" || $this->session->userdata('Divisi') == "admin"){
            $this->load->view('layout/admin/header',$data);;
            $this->load->view('admin/v_laporan',$data);
        } else {
            $this->load->view('layout/users/header',$data);
            $this->load->view('users/v_laporan',$data);
        }
    $this->load->view('layout/users/footer');
    
    }

    public function input_laporan()
    {
        
        $id_laporan = mt_rand(10000,99999);
        $logika = $this->input->post('jenis-form');
        $uangmasuk = $this->input->post('moneyin');
        $uangkeluar = $this->input->post('moneyout');
        $a = $this->input->post('tanggal');
        
        $d = strtotime($a);
        $tanggal = date("Y-m-d",$d);

        // var_dump($tanggal);
        // exit;

        if($logika == "keuangan"){
            if($this->session->userdata('Divisi') == "Bendahara" || $this->session->userdata('Divisi') == "bendahara"){

                $id = "IDLK-".$id_laporan;
                
                $this->db->order_by('id_lkeuangan', 'DESC');
                $this->db->limit(1);
                $uang = $this->data_model->dataget('laporan_keuangan')->result_array();
        
                foreach ($uang as $a) {
                    $c = $a['saldo'];
                }
                
                if ($uangkeluar > 0) {
                    $saldo = $c - $uangkeluar;
                } elseif ($uangmasuk > 0) {
                    $saldo = $c + $uangmasuk;
                } else {
                    echo "tes"; 
                }
                
                $arrayData = array(
                    'id_lkeuangan' => $id,
                    'tanggal' => $tanggal,
                    'pemasukan' => $uangmasuk,
                    'pengeluaran' => $uangkeluar,
                    'saldo' => $saldo,
                    'keterangan' => $this->input->post('keterangan1')
                );
            
                $result = $this->data_model->datainsert('laporan_keuangan',$arrayData);

                if($result){
                    $dataKeuangan = $this->data_model->dataget('laporan_keuangan')->result_array();
                    $resultArray = array();

                    foreach ($dataKeuangan as $a) {
                    
                        $idlk = $a['id_lkeuangan'];
                        $tanggal = $a['tanggal'];
                        $pemasukan = $a['pemasukan'];
                        $pengeluaran = $a['pengeluaran'];
                        $saldo = $a['saldo'];
                        $keterangan = $a['keterangan'];
                    
                        $resultArray[] = array(
                            'id_lkeuangan' => $idlk,
                            'tanggal' => $tanggal,
                            'pemasukan' => $pemasukan,
                            'pengeluaran' => $pengeluaran,
                            'saldo' => $saldo,
                            'keterangan' => $keterangan
                        );
                    }
                    echo json_encode(array(
                        'type' => 'keuangan',
                        'status' => 'berhasil', 
                        'data' => $resultArray
                    ));
                }

                // echo json_encode(array('status' => 'berhasil', 'data' => $resultArray));
            } else {
                echo json_encode(array(
                    'type' => 'keuangan',
                    'status' => 'banned'
                ));
            }
        } else if($logika == "proker") {
            
            $id = "IDLP-".$id_laporan;

            $arrayData = array(
                'id_lproker' => $id,
                'tanggal' => $tanggal,
                'nama_proker' => $this->input->post('namaproker'),
                'status' => $this->input->post('status'),
                'keterangan' => $this->input->post('keterangan2')
            );

            $result = $this->data_model->datainsert('laporan_proker',$arrayData);
            if($result){
                $dataProker = $this->data_model->dataget('laporan_proker')->result_array();
                $resultArray = array();

                foreach ($dataProker as $a) {
                
                    $idlp = $a['id_lproker'];
                    $tanggal = $a['tanggal'];
                    $namaProker = $a['nama_proker'];
                    $status = $a['status'];
                    $keterangan = $a['keterangan'];
                
                    $resultArray[] = array(
                        'id_lproker' => $idlp,
                        'tanggal' => $tanggal,
                        'namaproker' => $namaProker,
                        'status' => $status,
                        'keterangan' => $keterangan
                    );
                }
                echo json_encode(array(
                    'type' => 'proker',
                    'status' => 'berhasil', 
                    'data' => $resultArray
                ));
            }

            // echo json_encode(array('status' => 'berhasil', 'data' => $resultArray));
        } else {
            echo "gagal";
            die;
        }
    }

    public function del_laporan_proker($id_laporan)
    {
        $where = array('id_lproker' => $id_laporan);
        $this->data_model->datadelete('laporan_proker',$where);

        $this->session->set_flashdata('berhasil_laporan', '<div class="alert alert-success">Berhasil Hapus Laporan</div>');

        redirect('laporan');
    }

    public function del_laporan_keuangan($id_laporan)
    {
        $where = array('id_lkeuangan' => $id_laporan);
        $this->data_model->datadelete('laporan_keuangan',$where);

        $this->session->set_flashdata('berhasil_laporan', '<div class="alert alert-success">Berhasil Hapus Laporan</div>');

        redirect('laporan');
    }
}
?>