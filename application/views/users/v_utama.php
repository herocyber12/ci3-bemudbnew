<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
		  <?php 
			if ($this->session->flashdata('gagal_buat_absen') == true) {
			    echo $this->session->flashdata('gagal_buat_absen');
			} elseif($this->session->flashdata('gagal_buat_laporan_keuangan') == TRUE){
				echo $this->session->flashdata('gagal_buat_laporan_keuangan');
			} elseif($this->session->flashdata('berhasil_buat_absen') == TRUE){
				echo $this->session->flashdata('berhasil_buat_absen');
			}elseif($this->session->flashdata('postingan_berhasil')==TRUE){
				echo $this->session->flashdata('postingan_berhasil');
			}elseif($this->session->flashdata('postingan')==TRUE){
				echo $this->session->flashdata('postingan');
			}elseif($this->session->flashdata('bukan_Litbang') == TRUE){
				echo $this->session->flashdata('bukan_Litbang');
			}
			?>
            <div class="row">
              <div class="col-sm-6">
				  <div class="d-flex align-content-center justify-content-between mb-3">
				  	<div class="col-md-6">
				  		<div class="card border-secondary">
				  			<div class="card-body">
					  			<h4 class="text-secondary">Anggota BEM</h4>
								<h4 class="text-dark"><?php echo $jumlahAnggta; ?></h4>
					 		</div>
				  		</div>
					</div>
				  	<div class="col-6">
				  		<div class="card border-warning">
				  			<div class="card-body">
					  			<h4 class="text-warning">Jumlah Proker BEM U</h4>
								<h4 class="text-dark"><?php echo $jumlahProker; ?></h4>
					 		</div>
				  		</div>
					</div>
				  </div>
              </div>
              <div class="col-sm-6">
                <div class="d-flex align-items-center justify-content-md-end d-none">
					<!-- Buat postingan -->
					<?php
					
					if ($this->session->userdata('Divisi') == "kominfo" || $this->session->userdata('Divisi') == "ketua"){ ?>
						<div class="btn btn-group">
					<a href="" class="btn btn-info" data-toggle="modal"
        			    data-target="#modalpengumuman"><i class="typcn typcn-calendar-outline mr-2"></i>Buat Postingan</a>
					</div>
					<?php }
					?>
					
					<!-- Buat postingan -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Anggota BEM</h4>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="col-lg-12 grid-margin stretch-card">
						  <div class="card">
							<div class="card-body">
							  <h4 class="card-title">Divisi</h4>
							  <p class="card-description">
								<?php echo $this->session->userdata('Divisi'); ?>
							  </p>
							  <div class="table-responsive">
								<table class="table table-striped">
								  <thead>
									<tr>
									  <th>
										Nama
									  </th>
									  <th>
										Prodi
									  </th>
									</tr>
								  </thead>
								  <tbody>
									
									<?php
									$divisi=$this->session->userdata('Divisi');
									$ambil1 =$this->db->query("SELECT *FROM loginuser where divisi = '$divisi'");
									foreach($ambil1->result_array() as $data1){
									?>
									<tr>
									  <td>
										<?php echo $data1['nama'];?>
									  </td>
									  <td>
										 <?php echo $data1['prodi'];?>
									  </td>
									</tr>
									<?php
									}
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

		  <div class="modal fade" id="modalpengumuman" tabindex="-1" aria-labelledby="exampleModalLabel"
        			    aria-hidden="true">
        			    <div class="modal-dialog">
        			        <div class="modal-content">
        			            <div class="modal-header">
        			                <h5 class="modal-title" id="exampleModalLabel">Buat Postingan</h5>
        			                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			                    <span aria-hidden="true">&times;</span>
        			                </button>
        			            </div>
        			            <div class="modal-body">
								<form class="forms-sample" action="<?= site_url('home/input_postingan')?>" method="post" enctype="multipart/form-data">
									<input type="text" name="judul" class="form-control mb-2" placeholder="Masukan Tema Postingan">
									<input type="file" name="foto" class="form-control mb-2" id="imagesrc">
									<img id="preview" src="#" class="img-fluid" alt="Preview" style="display: none;">
									<button type="submit" class="btn btn-success">Buat</button>
                  				</form>
        			            </div>
        			        </div>
        			    </div>
        			</div>
          <!-- content-wrapper ends -->
		  <script>
			$(document).ready(function(){
				$("#imagesrc").change(function(){
					readURL($this);
				});
			});

			function readURL(input){
				if(input.files && input.files[0]){
					var reader = new FileReader();

					reader.onload = function(e){
						$('#preview').attr('src', e.target.result);
						$('#preview').css('display','block');
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
		  </script>