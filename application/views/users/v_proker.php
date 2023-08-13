 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <?php 
            if($this->session->flashdata('berhasil_proker')==TRUE){
              echo $this->session->flashdata('berhasil_proker');
            }
            ?>
            <!-- <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="exportProker"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="row">
             <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Proker</h4>
                  <form class="forms-sample" action="<?= site_url('proker/input_proker')?>" method="post">
					          <div class="form-group">
                      <label for="inputNamaProker1">Nama Proker</label>
                      <input name="namaproker" type="text" class="form-control" id="inputNamaProker1" placeholder="Nama Proker" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input name="tanggal" type="text" class="form-control" id="datepicker" placeholder="Tanggal proker akan dijalankan" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      <textarea class="form-control" name="alasan" id="exampleTextarea1" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="BUAT">Buat</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Proker</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Divisi</th>
                          <th>Nama Proker</th>
                          <th>Tanggal</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
							<?php
								foreach($proker as $data1):
							?>
						<tr>
							<td><?php echo $data1['divisi']?></td>
							<td><?php echo $data1['namaproker']?></td>
							<td><?php echo $data1['tanggal']?></td>
							<td><?php echo $data1['alasan'];?></td>
							<td><?php echo $data1['status'];?></td>
						</tr>
					    <?php
						    endforeach;
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