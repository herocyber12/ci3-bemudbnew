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
                      <input name="no_surat" type="number" class="form-control" placeholder="Urutan Nomor Surat" required>
                    </div>
					            <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" required>
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
                          <th>No.</th>
                          <th>ID Surat</th>
                          <th>Nomor Surat</th>
						              <th>Tanggal Surat</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
						            <?php
                        $no = 1;
						            	foreach($surat as $data1):
						            ?>
						            <tr>
                          <td><?= $no; ?></td>
						            	<td><?= $data1['id_surat']?></td>
						            	<td><?= $data1['nomor_surat']?></td>
						            	<td><?= $data1['tanggal_surat']?></td>
						            	<td><?= $data1['kegunaan_surat'];?></td>
                          <td>	
                            <div class="btn btn-group">
											        <a href="" class="btn btn-info" data-toggle="modal"
        							        		    data-target="#modal<?= $data1['id_surat']; ?>"><i class="mdi mdi-wrench"></i>Edit</a>
											        </div>
        							      	<div class="modal fade" id="modal<?= $data1['id_surat']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        							      	    aria-hidden="true">
        							      	    <div class="modal-dialog">
        							      	        <div class="modal-content">
        							      	            <div class="modal-header">
        							      	                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        							      	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        							      	                    <span aria-hidden="true">&times;</span>
        							      	                </button>
                                          </div>
        							      	            <div class="modal-body">
                                          <form class="forms-sample" action="<?= site_url('surat/updateSurat')?>" method="post">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1">ID SURAT</label>
                                              <input name="id_surat" type="text" class="form-control" value="<?= $data1['id_surat']; ?>" readonly>
                                            </div>
					                                  <div class="form-group">
                                              <label for="exampleInputEmail1">Nomor Surat</label>
                                              <input name="nomor_surat" type="text" class="form-control" value="<?= $data1['nomor_surat']; ?>">
                                            </div>
					                                  <div class="form-group">
                                              <label for="exampleInputDate1">Tanggal</label>
                                              <input name="tanggal_surat" type="date" class="form-control" value="<?= $data1['tanggal_surat']; ?>">
                                            </div>
					                                  <div class="form-group">
                                              <label for="exampleInputFile1">Keterangan</label>
                                              <input name="kegunaan_surat" type="text" class="form-control" value="<?= $data1['kegunaan_surat']; ?>">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary mr-2" value="Update">Update</button>
                                          </form>
        							      	            </div>
        							      	        </div>
        							      	    </div>
        							      	</div>
						              </td>
						            </tr>
				                	<?php
                          $no++;
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