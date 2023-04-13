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
					  			<h4 class="text-warning">Jumlah BEM</h4>
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
					
					if ($this->session->userdata('Divisi') == "kominfo"){
					echo "<div class='mb-3 mr-2 mb-xl-0 pr-1'>
						<div class='dropdown'>
							<button class='btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2' type='button' id='dropdownMenu3' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								<i class='typcn typcn-calendar-outline mr-2'></i>Buat Postingan
							</button>
							<div class='dropdown-menu' aria-labelledby='dropdownMenuSizeButton3' data-x-placement='top-start'>
								<div class='dropdown-header'>";
					echo form_open_multipart('user/insertPostingan');
					echo	"<input type='text' name='judul' class='form-control mb-4' placeholder='Nama Kegiatan'>
							<input type='file' name='foto' class='form-control mb-4' required>
							<button type='submit' name='submit' class='btn btn-success'>Buat</button>";
					echo form_close();
									
							echo	"</div>
							</div>
						</div>
					</div>";
					}
					?>
					
					<!-- Buat postingan -->
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <a href="export"><button type="button" class="btn btn-sm bg-white btn-icon-text border"><i class="typcn typcn-arrow-forward-outline mr-2"></i> Export</button></a>
                  </div>
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
          <!-- content-wrapper ends -->