<?php 
    foreach($absensia->result_array() as $row):
        $tanggal=$row['tngl'];

        $keterangan = $row['keterangan'];
      endforeach;
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php 
              if($this->session->flashdata('abnsensi_gagal') == TRUE){
                echo $this->session->flashdata('abnsensi_gagal');
              }elseif($this->session->flashdata('absensi_berhasil')){
                echo $this->session->flashdata('absensi_berhasil');
              }elseif($this->session->flashdata('berhasil_buat_absen') == TRUE){
                echo $this->session->flashdata('berhasil_buat_absen');
              }
            ?>
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
							              <td><form>
		    				              <input type="submit" class="btn btn-success" name="submit" value="Absen" id="input_absensi" <?php echo $disable_in;?>></input>
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
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->