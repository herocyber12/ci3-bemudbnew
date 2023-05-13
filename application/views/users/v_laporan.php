<?php 
$jns_status = "";

$berjalan; $tidak_berjalan; $proses;

switch($jns_status){
    case "Berjalan"	: $berjalan = "selected"; break;
    case "Proses"	: $proses = "selected"; break;
    case "Tidak Berjalan" : $tidak_berjalan = "selected"; break;
}
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <?php 
              if($this->session->flashdata('berhasil_buat_laporan') == TRUE){
                echo $this->session->flashdata('berhasil_buat_laporan');
              }elseif($this->session->flashdata('gagal_buat_laporan_keuangan')==TRUE){
                echo $this->session->flashdata('gagal_buat_laporan_keuangan');
              }
            ?>
            <div class="row">
              <div class="col-sm-12 mb-4">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-primary btn-icon-text border" data-toggle="modal" data-target="#addlaporan"><i class="mdi mdi-note-plus mr-2 text-white"></i> <span class="text-white">Tambahkan Laporan</span></button>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Buat Laporan</h4>
                      <div class="table-responsive">
                        <table class="table overflow-auto">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Tanggal</th>
                              <th>Pemasukan</th>
						                  <th>Pengeluaran</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
					                	<?php
					              	  foreach($laporan_proker as $row):
					              	  ?>
					              	  <tr>
                              <td><?php echo htmlentities(strip_tags(trim($row['id_lproker'])))?></td>
					              	  	<td><?php echo htmlentities(strip_tags(trim($row['tanggal'])));?></td>
					               		  <td><?php echo htmlentities(strip_tags(trim($row['nama_proker'])));?></td>
					                		<td><?php echo htmlentities(strip_tags(trim($row['status'])));?></td>
					                		<td><?php echo htmlentities(strip_tags(trim($row['keterangan'])));?></td>
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
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Arsip Laporan Keuangan</h4>
                      <div class="table-responsive">
                        <table class="table overflow-auto">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Tanggal</th>
                              <th>Pemasukan</th>
						                  <th>Pengeluaran</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
					                	<?php
					                	foreach($laporan as $row):
					                	?>
					                	<tr>
                              <td><?php echo htmlentities(strip_tags(trim($row['id_lkeuangan'])))?></td>
					                		<td><?php echo htmlentities(strip_tags(trim($row['tanggal'])));?></td>
					                		<td><?php echo htmlentities(strip_tags(trim($row['pemasukan'])));?></td>
					                		<td><?php echo htmlentities(strip_tags(trim($row['pengeluaran'])));?></td>
					                		<td><?php echo htmlentities(strip_tags(trim($row['keterangan'])));?></td>
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
          <!-- Modal -->
          <div class="modal fade" id="addlaporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Laporan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form class="forms-sample" action="<?= site_url('laporan/input_laporan')?>" method="post">
                    <div class="form-group" >
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="form-group">
                      <label><input type="radio" name="jenis-form" class="m-1" value="keuangan" onchange="jenisFormChanged()" checked> Keuangan</label>
                      <label><input type="radio" name="jenis-form" class="m-1" value="proker" onchange="jenisFormChanged()"> Proker</label>
                    </div>
                    <div id="keuangan-form" style="display: block ;">
                      <label for = "pemasukanK">Pemasukan</label>
                      <input type="text" name="moneyin" class="form-control m-2" id="pemasukanK" placeholder="Masukan Jumlah Pemasukan">
                      <label for = "pengeluaranK">Pengeluaran</label>
                      <input type="text" name="moneyout" class="form-control m-2" id="pengeluaranK" placeholder="Masukan Jumlah Pengeluaran">
                      <label for = "pengeluaranK">Keterangan Pelaporan Keuangan</label>
                      <textarea name="keterangan1" class="form-control m-2" placeholder="Masukan Keterangan Uangnya Untuk Apa Saja"></textarea>
                      <button type="submit" name="submit" class="btn btn-primary mr-2" value="keuangan">Buat</button>
                    </div>
                    <div id="proker-form" style="display: none ;">
                      <label for = "pemasukanK">Nama Proker</label>
                      <input type="text" name="namaproker" class="form-control m-2" id="pemasukanK" placeholder="Masukan Nama Proker">
                      <label for = "pengeluaranK">Status</label>
                      <select class="form-control m-2" name="status">
                        <option value="Berjalan<?php $berjalan ?>">Berjalan</option>
                        <option value="Proses<?php $proses ?>">Proses</option>
                        <option value="Tidak Berjalan<?php $tidak_berjalan ?>">Tidak Berjalan</option>
                      </select>
                      <label>Keterangan Proker</label>
                      <textarea name="keterangan2" class="form-control m-2" placeholder="Masukan Keterangan Proker"></textarea>
                      <button type="submit" name="submit" class="btn btn-primary mr-2" value="proker">Buat</button>
                    </div>
                  </form>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->