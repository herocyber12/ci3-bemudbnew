<?php 
    foreach($absensia->result_array() as $row):
        $tanggal=$row['tngl'];

        $keterangan = $row['keterangan'];
      endforeach;
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
            <div class="col-sm-6">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                  <?php echo anchor(site_url('absensi/buatAbsen'),'<button type="submit" name="submit" class="btn btn-secondary m-2"><i class="mdi mdi-note-plus"></i> Buat Absen</button>'); ?>
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
                            <?php foreach($tanggalJ->result_array() as $row3):
                               $disable_in = "";
                               if($absensia->num_rows()){
                                   if(empty($tanggal) && empty($keterangan)){
                                     $disable_in = "";
                                   } else{
                                     $disable_in = "disabled='disabled'";
                                   }
                               }
                              ?>
                            <td><?php echo $row3['tanggal'];?></td>
						                <td><?php echo $row3['jam']; ?></td>
							              <td><button type="button" id="absensi" class="btn btn-success" value="absen" <?php echo $disable_in;?>>Absen</button>
                               
                            <!-- <form method="post" action="<?= site_url('absensi/input_absen') ?>">
		    				              <input type="submit" class="btn btn-success" name="submit" value="Absen" <?php echo $disable_in;?>></input>
							                </form> -->
                            </td>
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
                          <th>No</th>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th>Divisi</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody id="data_absen">
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
                        
                        $no = 1;
					              foreach($hasil_ambil1 as $data1){
							        ?>	
                      <td><?= $no ?></td>
							        <td><?= $data1['nim']?></td>
							        <td><?= $data1['nama']?></td>
							        <td><?= $data1['divisi']?></td>
							        <td><?= $data1['tngl'];?></td>
							        <td><?= $data1['jam_skrng'];?></td>
							        <td><?= $data1['keterangan'];?></td>
                                </tr>
						          <?php
                      $no++;
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