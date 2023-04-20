<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
			  <?php 
			  	if($this->session->flashdata('berhasil_surat') == TRUE){
            echo $this->session->flashdata('berhasil_surat');
          }elseif($this->session->flashdata('berhasil_edit') == TRUE){
            echo $this->session->flashdata('berhasil_edit');
          }
			  ?>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
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
                        <tr>
						        	<?php
						        		foreach($jumlahSurat->result_array() as $data1):
						        	?>
						            <tr>
						            	<td><?php echo $data1['id_surat']?></td>
						            	<td><?php echo $data1['nomor_surat']?></td>
						            	<td><?php echo $data1['tanggal_surat']?></td>
						            	<td><?php echo $data1['kegunaan_surat'];?></td>
                          <td>	
                            <div class="btn btn-group">
											        <a href="" class="btn btn-info" data-toggle="modal"
        							        		    data-target="#modal<?php echo $data1['id_surat']; ?>"><i class="mdi mdi-wrench"></i>Edit</a>
											        </div>
        							      	<div class="modal fade" id="modal<?php echo $data1['id_surat']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                              <input name="id_surat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['id_surat']; ?>" readonly>
                                            </div>
					                                  <div class="form-group">
                                              <label for="exampleInputEmail1">Nomor Surat</label>
                                              <input name="nomor_surat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['nomor_surat']; ?>">
                                            </div>
					                                  <div class="form-group">
                                              <label for="exampleInputDate1">Tanggal</label>
                                              <input name="tanggal_surat" type="date" class="form-control" id="exampleInputDate1" value="<?php echo $data1['tanggal_surat']; ?>">
                                            </div>
					                                  <div class="form-group">
                                              <label for="exampleInputFile1">Keterangan</label>
                                              <input name="kegunaan_surat" type="text" class="form-control" id="exampleInputFile1" value="<?php echo $data1['kegunaan_surat']; ?>">
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary mr-2" value="Update">Update</button>
                                          </form>
        							      	            </div>
        							      	        </div>
        							      	    </div>
        							      	</div>
											      <?php //echo anchor(base_url('surat/edit_data/').$data1['uid'],'<button type="submit" name="edit" class="btn btn-warning m-2" value="Edit"><i class="mdi mdi-wrench"></i>Edit</button>'); ?>
                            <?php echo anchor(base_url('surat/delete_surat/').$data1['id_surat'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?>
						              </td>
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