<?php 
    foreach($absensia->result_array() as $row):
        $tanggal=$row['tngl'];
    endforeach;

    $disable_in = "";
    if($absensia->num_rows()){
        if(empty($tanggal)){
          $disable_in = "";
        } else{
          $disable_in = "disabled='disabled'";
        }
    }
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php 
              if($this->session->flashdata('abnsensi_gagal') == TRUE){
                echo $this->session->flashdata('abnsensi_gagal');
              }elseif($this->session->flashdata('absensi_berhasil')){
                echo $this->session->flashdata('absensi_berhasil');
              }
            ?>
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="exportAbsen"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
             <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Absen Rapat</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <?php foreach($tanggalJ->result_array() as $row3):?>
                            <td><?php echo $row3['tanggal'];?></td>
						                <td><?php echo $row3['jam']; ?></td>
							              <td><form method="post" action="<?= site_url('pages/absensi/input_absen') ?>">
		    				              <input type="submit" class="btn btn-success" name="submit" value="Absen" <?php echo $disable_in;?>></input>
							                </form></td>
                            <?php endforeach; ?>
                        </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Riwayat Absen</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th>Divisi</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
							        <?php  
                        $nim = $this->session->userdata('Nim');
                        $divisi = $this->session->userdata('Divisi');
							          if($this->session->userdata('Divisi') == "ketua" || $this->session->userdata('Divisi') == "wakil ketua" ||  $this->session->userdata('Divisi') == "sekretaris"){
							            $ambil1 =$this->db->query("SELECT *FROM absensi ORDER BY tngl desc");
                          $hasil_ambil1 = $ambil1->result_array();
							          } else{
							            $ambil1 = $this->db->query("SELECT *FROM absensi where divisi = '$divisi'");
							            $hasil_ambil1 = $ambil1->result_array();
							          }
					              foreach($hasil_ambil1 as $data1){
							        ?>	
							        <td><?php echo $data1['nim']?></td>
							        <td><?php echo $data1['nama']?></td>
							        <td><?php echo $data1['divisi']?></td>
							        <td><?php echo $data1['tngl'];?></td>
							        <td><?php echo $data1['keterangan'];?></td>
                                </tr>
						          <?php
							          }
						          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->