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
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="exportSurat"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
                </div>
              </div>
            </div>
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
						            	<td class="d-flex">
                          <?php echo anchor(base_url('admin/edit_surat/').$data1['id_surat'],'<button type="submit" name="edit" class="btn btn-warning m-2" value="Edit"><i class="mdi mdi-wrench"></i>Edit</button>'); ?>
                          <?php echo anchor(base_url('admin/delete_surat/').$data1['id_surat'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?>
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