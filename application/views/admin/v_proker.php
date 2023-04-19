<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
			  <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="exportProker"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
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
                        </tr>
                      </thead>
                      <tbody>
						<?php
						foreach($jumlahProker->result_array() as $data1):
						?>
						<tr>
							<td><?php echo $data1['divisi']?></td>
							<td><?php echo $data1['namaproker']?></td>
							<td><?php echo $data1['tanggal']?></td>
							<td><?php echo $data1['alasan'];?></td>
							<?php 
                if($data1['status'] == "Disetujui"){
                  echo "<td class='d-flex'><button class = 'btn btn-success' disabled><i class = 'mdi mdi-check'></i>$data1[status]</button>";
                  echo anchor(base_url('proker/delete_proker/').$data1['id'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); 
                  echo"</td>";
                }elseif($data1['status'] == "Ditolak"){
                  echo "<td class='d-flex'><button class = 'btn btn-warning' disabled><i class = 'mdi mdi-hand-back-left'></i>$data1[status]</button>";
                  echo anchor(base_url('proker/delete_proker/').$data1['id'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); 
                  echo"</td>";
                } else{
                  echo "<td class='d-flex'>";
                  echo anchor(base_url('proker/confirm_proker/').$data1['id'],'<button type="submit" class="btn btn-success mr-1" name="submit" value="konfirmasi"><i class="mdi mdi-check"></i>Konfirmasi</button>');
                  echo anchor(base_url('proker/tolak_proker/').$data1['id'],'<button type="submit" class="btn btn-warning" name="submit" value="tolak"><i class="mdi mdi-hand-back-left"></i>Tolak </button>');
                  echo anchor(base_url('proker/delete_proker/').$data1['id'],'<button type="submit" name="delete" class="btn btn-danger ml-1" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>');
                  echo "</div>";
                }
								?>
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