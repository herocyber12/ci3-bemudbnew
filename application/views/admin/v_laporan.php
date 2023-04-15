<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
			  <?php 
			  	if($this->session->flashdata('berhasil_laporan') ==TRUE ){
					echo $this->session->flashdata('berhasil_laporan');
				}
			  ?>
			  <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="exportLaporan"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Arsip Laporan</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID Laporan</th>
                          <th>Tanggal</th>
						              <th>Nama Proker</th>
                          <th>Divis</th>
                          <th>Keterangan</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
					            		<?php
					            			foreach($sum_lap_proker->result_array() as $row):
					            		?>
					            	<tr>
					            		<td><?php echo $row['id_lproker']; ?></td>
					            		<td><?php echo $row['tanggal'];?></td>
					            		<td><?php echo $row['nama_proker'];?></td>
                          <td><?php echo $row['divisi'] ?></td>
					            		<td><?php echo $row['keterangan'];?></td>
					            		<td><?php echo $row['status'];?></td>
					            		<td><?php echo anchor(site_url('pages/laporan/del_laporan_proker/').$row['id_lproker'],'<button type="submit" name="submit" class="btn btn-danger m-2" value="laporan_proker"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?></td>
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
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Arsip Laporan</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID Laporan</th>
                          <th>Tanggal</th>
						              <th>Pemasukan</th>
                          <th>Pengeluaran</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
					            		<?php
					            			foreach($sum_lap_keuangan->result_array() as $row):
					            		?>
					            	<tr>
					            		<td><?php echo $row['id_lkeuangan']; ?></td>
					            		<td><?php echo $row['tanggal'];?></td>
					            		<td><?php echo $row['pemasukan'];?></td>
                          <td><?php echo $row['pengeluaran'] ?></td>
					            		<td><?php echo $row['keterangan'];?></td>
					            		<td><?php echo anchor(site_url('pages/laporan/del_laporan_keuangan/').$row['id_lkeuangan'],'<button type="submit" name="submit" class="btn btn-danger m-2" value="laporan_keuangan"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?></td>
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