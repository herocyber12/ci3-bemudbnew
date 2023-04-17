<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
			  <?php
			  	if($this->session->flashdata('pesan_hapus') == TRUE){
                    echo $this->session->flashdata('pesan_hapus');
                } elseif($this->session->flashdata('berhasil_notifikasi') == TRUE){
                    echo $this->session->flashdata('berhasil_notifikasi');
                } elseif($this->session->flashdata('gagal_hapus_anggota')){
					echo $this->session->flashdata('gagal_hapus_anggota');
				} elseif($this->session->flashdata('berhasil_tambah_anggota')){
					echo $this->session->flashdata('berhasil_tambah_anggota');
				}elseif($this->session->flashdata('berhasil_edit') == TRUE){
					echo $this->session->flashdata('berhasil_edit');
				} else if($this->session->flashdata('berhasil_calon') == TRUE){
					echo $this->session->flashdata('berhasil_calon');
				}

			  ?>
			 <!--
			  <div class="row">
              <div class="col-sm-12">
                <div class="d-flex align-items-center justify-content-md-end d-none">

                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="export"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
                </div>
              </div>
            </div>  -->
            
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between mb-4">
                        <div class="row">
                    	  <h4 class="card-title">Calon Anggota BEM</h4>
						</div>
						<div class="row">
						  <div class="input-group">
							<?php echo form_open_multipart(); ?>
							<div class="d-flex">
						  		<div class="form-outline">
						    		<input type="search" id="form1" name="search" class="form-control" placeholder="Search"/>
								</div>
						  		<button type="submit" class="btn btn-success">
						    		<i class="mdi mdi-magnify"></i>
						  		</button>
								  </div>
							<?php echo form_close(); ?>
						  </div>
						</div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="col-lg-12 grid-margin stretch-card">
						  <div class="card">
							<div class="card-body">
							  <div class="table-responsive">
								<table class="table table-striped">
								  <thead>
									<tr>
										<th>ID CALON</th>
										<th>Nama </th>
										<th>Prodi</th>
									 	<th>Nomor HP </th>
									  	<th>E-MAIL </th>
										<th>Divisi</th>
									</tr>
								  </thead>
								  <tbody>
									
									<?php
                                        foreach($calon->result_array() as $data1):
									?>
									<tr>
									  <td>
										<?php echo $data1['id_oprec'];?>
									  </td>
										<td>
										<?php echo $data1['nama'];?>
									  </td>
									  <td>
										 <?php echo $data1['prodi'];?>
									  </td>
									  <td>
										 <?php echo $data1['no_hp'];?>
									  </td>
									  <td>
										 <?php echo $data1['email'];?>
									  </td>
										<td>
										 <?php echo $data1['divisi'];?>
									  </td>
											<?php 
				if($data1['status'] == "Diterima"){
                  echo "<td class='d-flex'><button class = 'btn btn-success' disabled><i class = 'mdi mdi-check'></i>$data1[status]</button>";
                  echo anchor(base_url('pages/oprec/delete_calon/').$data1['id_oprec'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); 
                  echo"</td>";
                }elseif($data1['status'] == "Ditolak"){
                  echo "<td class='d-flex'><button class = 'btn btn-warning' disabled><i class = 'mdi mdi-hand-back-left'></i>$data1[status]</button>";
                  echo anchor(base_url('pages/oprec/delete_calon/').$data1['id_oprec'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); 
                  echo"</td>";
                } else{
                  echo "<td class='d-flex'>";
                  echo anchor(base_url('pages/oprec/konfirmasi_calon/').$data1['id_oprec'],'<button type="submit" class="btn btn-success mr-1" name="submit" value="konfirmasi"><i class="mdi mdi-check"></i>Terima</button>');
                  echo anchor(base_url('pages/oprec/tolak_calon/').$data1['id_oprec'],'<button type="submit" class="btn btn-warning" name="submit" value="tolak"><i class="mdi mdi-hand-back-left"></i>Tolak</button>');
                  echo anchor(base_url('pages/oprec/delete_calon/').$data1['id_oprec'],'<button type="submit" name="delete" class="btn btn-danger ml-1" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>');
                  echo "</div>";
                  echo "</td>";
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
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->