<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
			  <?php 
			  	if($this->session->flashdata('berhasil_absen') == TRUE){
					echo $this->session->flashdata('berhasil_absen');
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
              <div class="col-lg-12 grid-margin stretch-card">
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
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
							<?php
								foreach($jumlahAbsen->result_array() as $data1):
							?>	
							<td><?php echo $data1['nim']?></td>
							<td><?php echo $data1['nama']?></td>
							<td><?php echo $data1['divisi']?></td>
							<td><?php echo $data1['tngl'];?></td>
							<td><?php echo $data1['keterangan'];?></td>
							<td><?php echo anchor(base_url('absensi/delete_absen/').$data1['id_absen'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?></td>
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