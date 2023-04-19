		<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php 
            if($this->session->flashdata('berhasil_surat')==TRUE){
              echo $this->session->flashdata('berhasil_surat');
            }
            ?>
            <div class="row">
             <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Surat</h4>
                  <form class="forms-sample" action="<?= site_url('surat/input_surat')?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Surat</label>
                      <input name="no_surat" type="number" class="form-control" id="exampleInputEmail1" placeholder="Urutan Nomor Surat" required>
                    </div>
					            <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" required>
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
                  <h4 class="card-title">Arsip Surat</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id Surat</th>
                          <th>Nomor Surat</th>
						              <th>Tanggal Surat</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
						            <?php
						            	foreach($surat as $data1):
						            ?>
						            <tr>
						            	<td><?php echo $data1['id_surat']?></td>
						            	<td><?php echo $data1['nomor_surat']?></td>
						            	<td><?php echo $data1['tanggal_surat']?></td>
						            	<td><?php echo $data1['kegunaan_surat'];?></td>
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