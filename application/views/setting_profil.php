<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
          <?php 
                if($this->session->flashdata('berhasil_update')==TRUE){
                  echo $this->session->flashdata('berhasil_update');
                }elseif($this->session->flashdata('berhasil_fotoP')==TRUE){
                  echo $this->session->flashdata('berhasil_fotoP');
                }elseif($this->session->flashdata('gagal_ganti')==TRUE){
                  echo $this->session->flashdata('gagal_ganti');
                }
              ?>
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Edit Profil</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
							<div class="input-group">
							<form action="<?= site_url('profil/updateFotoProfil') ?>" method="post" class="form-example" enctype="multipart/form-data">
								<div class="text-center">
									<?php 
                  foreach($profil->result_array() as $data1 ):
										if($data1['foto_profil'] == ""){
										echo	"<img src='../asset/images/woman.png' class='border border-primary' height='50%' width='50%'>";
										} else{
										echo	"<img src='../asset/images/foto_profil/$data1[foto_profil]' class='border border-primary' height='50%' width='50%'>";
										} ?>
                    <h3 class="mt-4">Format Nama File Nama_Prodi_Divisi</h3>
								<input type="file" name="foto" id="inputFoto1" class="form-control mb-3 mt-3">
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="Ubah Foto">Ubah Foto</button>
								</div>
								</form>
							</div>
                		</div>
						<div class="col-lg-6 grid-margin stretch-card">
							<div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Edit Data Diri</h4>
					  <form action="<?= site_url('profil/update_data')?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nim</label>
                      <input name="nim" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['nim']; ?>" placeholder="Nim" readonly>
                    </div>
					  <div class="form-group">
                      <label for="exampleInputDate1">Nama</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputDate1" value="<?php echo $data1['nama']; ?>">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputFile1">Prodi</label>
                      <input name="prodi" type="text" class="form-control" id="exampleInputFile1" value="<?php echo $data1['prodi']; ?>">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputFile1">Divisi</label>
                      <input name="divisi" type="text" class="form-control" id="exampleInputFile1" value="<?php echo $data1['divisi']; ?>" readonly>
                    </div>
					  <div class="form-group">
                      <label for="exampleInputFile1">Nomor HP</label>
                      <input name="no_hp" type="text" class="form-control" id="exampleInputFile1" value="<?php echo $data1['no_hp']; ?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="Update">Update</button>
                  </form>
                  <?php endforeach; ?>
                </div>
                </div>
              		  </div>
            </div>
          </div>
          <!-- content-wrapper ends -->