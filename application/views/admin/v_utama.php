<?php 
$jenis_export = "";
$anggota = ""; $absensi = ""; $laporan_proker = ""; $proker ="";
$laporan_keuangan = ""; $arsip_surat = "";

switch($jenis_export){
  case "loginuser" 					  : $anggota 				    = "selected"; break;
  case "absensi"						  : $absensi					= "selected"; break;
  case "proker"					  		  : $proker             		= "selected"; break;
  case "laporan_proker"					  : $laporan_proker             = "selected"; break;
  case "laporan_keuangan"                 : $laporan_keuangan			= "selected"; break;
  case "no_surat"					  : $arsip_surat				= "selected"; break;
}
?>
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
			  <?php
			  	if($this->session->flashdata('pesan_hapus') == TRUE){
                    echo $this->session->flashdata('pesan_hapus');
                } elseif($this->session->flashdata('berhasil_notifikasi') == TRUE){
                    echo $this->session->flashdata('berhasil_notifikasi');
                } elseif($this->session->flashdata('gagal_hapus_anggota') == TRUE){
					echo $this->session->flashdata('gagal_hapus_anggota');
				} elseif($this->session->flashdata('berhasil_tambah_anggota') == TRUE){
					echo $this->session->flashdata('berhasil_tambah_anggota');
				}elseif($this->session->flashdata('berhasil_edit') == TRUE){
					echo $this->session->flashdata('berhasil_edit');
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
					  			<h4 class="text-warning">Jumlah Proker BEM</h4>
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
					
					if ($this->session->userdata('Divisi') == "Admin"){
					echo "<div class='mb-3 mr-2 mb-xl-0 pr-1'>
						<div class='dropdown'>
							<button class='btn bg-white btn-sm dropdown-toggle btn-icon-text border mr-2' type='button' id='dropdownMenu3' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								<i class='typcn typcn-calendar-outline mr-2'></i>Pengumuman
							</button>
							<div class='dropdown-menu' aria-labelledby='dropdownMenuSizeButton3' data-x-placement='top-start'>
								<div class='dropdown-header'>
									<form action='insertNotif' method='post'>
										<input type='text' name='judul' class='form-control mb-4' placeholder='Pengumuman'>
										<input type='text' name='keterangan' class='form-control mb-4' placeholder='Isi Pengumuman'>
										<button type='submit' name='submit' class='btn btn-success' value='Buat'>Buat</button>
									</form>
							    </div>
							</div>
						</div>
					</div>";
					}
					?>
					<!-- Buat postingan -->
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
				  <button type="button" class="btn btn-sm bg-white btn-icon-text border" data-toggle="modal" data-target="#exportid"><i class="typcn typcn-arrow-forward-outline mr-2"></i>Export Data</button>
					 <!-- Modal -->
					 <div class="modal fade" id="exportid" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        			    <div class="modal-dialog modal-dialog-centered" role="document">
        			      <div class="modal-content">
        			        <div class="modal-header">
        			          <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Laporan</h5>
        			          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        			            <span aria-hidden="true">&times;</span>
        			          </button>
        			        </div>
        			        <div class="modal-body">
							<form class="forms-sample" action="<?= site_url('home/export')?>" method="post">
        			            <div class="form-group" >
        			              <label for="exampleInputEmail1">Nama File</label>
        			              <input name="nama_file" type="text" class="form-control mb-4" id="exampleInputEmail1" required>
								  <label for="exampleInputEmail1">Tanggal</label>
								  <select class="form-control" name="jenis_export" require>
									<option value="loginuser"<?php $anggota ?>>Data Anggota</option>
									<option value="absensi"<?php $absensi ?>>Absensi</option>
									<option value="proker"<?php $proker ?>>Proker</option>
									<option value="laporan_proker"<?php $laporan_proker ?>>Laporan Proker</option>
									<option value="laporan_keuangan"<?php $laporan_keuangan ?>>Laporan Keuangan</option>
									<option value="no_surat"<?php $arsip_surat ?>>Arsip Surat</option>
								  </select>
								  <input type="submit" name="submit" class="btn btn-primary mt-5" value="Export">
        			            </div>
        			          </form>
        			        </div>
        			      <div class="modal-footer">
        			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        			      </div>
        			    </div>
        			  </div>
        			</div>
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
							  <div class="table-responsive">
								<table class="table table-striped">
								  <thead>
									<tr>
										<th>Nim</th>
									  <th>
										Nama
									  </th>
									  <th>
										Prodi
									  </th>
										<th>Divisi</th>
										<th></th>
									</tr>
								  </thead>
								  <tbody>
									
									<?php
										$ambil1 =$this->db->get('loginuser');
										
                                        foreach($ambil1->result_array() as $data1):
									?>
									<tr>
									  <td>
										<?php echo $data1['nim'];?>
									  </td>
										<td>
										<?php echo $data1['nama'];?>
									  </td>
									  <td>
										 <?php echo $data1['prodi'];?>
									  </td>
										<td>
										 <?php echo $data1['divisi'];?>
									  </td>
										
									  <td class="d-flex">
											<!-- membuat tombol dengan ukuran small berwarna biru  -->
        									<!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
        									caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
        									<div class="btn btn-group">
											<a href="" class="btn btn-info" data-toggle="modal"
        									    data-target="#modal<?php echo $data1['uid']; ?>"><i class="mdi mdi-wrench"></i>Edit</a>
											</div>
        									<!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
        									<!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
        									<div class="modal fade" id="modal<?php echo $data1['uid']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
        									    aria-hidden="true">
        									    <div class="modal-dialog">
        									        <div class="modal-content">
        									            <div class="modal-header">
        									                <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        									                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        									                    <span aria-hidden="true">&times;</span>
        									                </button>
        									            </div>
        									            <!-- di dalam modal-body terdapat 4 form input yang berisi data.
        									            data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
        									            <div class="modal-body">
														<form class="forms-sample" action="<?= site_url('home/update_anggota')?>" method="post">
                  										  <div class="form-group">
                  										    <input name="uid" type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['uid']; ?>" placeholder="Nim" readonly>
                  										  </div>
                  										  <div class="form-group">
                  										    <label for="exampleInputEmail1">Nim</label>
                  										    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data1['nim']; ?>" placeholder="Nim">
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
                  										    <select name="divisi" class="form-control">
															      <option value="<?php echo $data1['divisi']?>"><?php echo $data1['divisi'] ?></option>
															      <option value="ketua" <?php $ketua?>>Ketua</option>
															      <option value="wakil ketua" <?php $wakilketua?>>Wakil Ketua</option>
															      <option value="sekretaris" <?php $sekretaris?>>Sekretaris</option>
															      <option value="bendahara" <?php $bendahara?>>Bendahara</option>
															      <option value="sosial" <?php $sosial?>>Sosial</option>
															      <option value="kominfo" <?php $kominfo?>>KOMINFO</option>
															      <option value="humas" <?php $humas?>>Humas</option>
															      <option value="litbang & kastrat" <?php $kajianstrategi ?>>Litbang Dan Kastrat</option>
															      <option value="psdm" <?php $psdm?>>PSDM</option>
															</select>
                  										  </div>
                  										  <button type="submit" name="submit" class="btn btn-primary mr-2" value="Update">Update</button>
                  										</form>
        									            </div>
        									            <!-- <div class="modal-footer">
        									                <button type="button" class="btn btn-primary">Save changes</button>
        									            </div> -->
        									        </div>
        									    </div>
        									</div>
										</td>
										<td class="d-grid">
										<?php echo anchor(base_url('home/delete_anggota/').$data1['uid'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->