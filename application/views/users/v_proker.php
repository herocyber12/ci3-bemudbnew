 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
             <div class="col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Proker</h4>
                  <form class="forms-sample" id="proker-form">
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
                    <button type="button" id="buat-proker" class="btn btn-primary mr-2" value="BUAT">Buat</button>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-xl-8 grid-margin stretch-card">
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
                      <tbody id="data_proker">
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