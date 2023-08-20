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
            <div class="row">
              <div class="col-sm-12 mb-4">
                <div class="d-flex align-items-center justify-content-md-end d-none">
                  <div class="pr-1 mb-3 mr-2 mb-xl-0">
                    <button type="button" class="btn btn-sm bg-primary btn-icon-text border" data-toggle="modal" data-target="#addlaporan"><i class="mdi mdi-note-plus mr-2 text-white"></i> <span class="text-white">Tambahkan Laporan</span></button>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Arsip Laporan Proker</h4>
                      <div class="table-responsive">
                        <table class="table overflow-auto">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>ID Laporan</th>
                              <th>Tanggal Laporan</th>
                              <th>Nama Proker</th>
						                  <th>Status</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody id="data_proker">
                            <tr>
					                	<?php
                            $no = 1;
					              	  foreach($laporan_proker as $row):
					              	  ?>
					              	  <tr>
                              <td><?= $no; ?></td>
                              <td><?= htmlentities(strip_tags(trim($row['id_lproker'])))?></td>
					              	  	<td><?= htmlentities(strip_tags(trim($row['tanggal'])));?></td>
					               		  <td><?= htmlentities(strip_tags(trim($row['nama_proker'])));?></td>
					                		<td><?= htmlentities(strip_tags(trim($row['status'])));?></td>
					                		<td><?= htmlentities(strip_tags(trim($row['keterangan'])));?></td>
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
              <div class="col-xl-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Arsip Laporan Keuangan</h4>
                      <div class="table-responsive">
                        <table class="table overflow-auto">
                          <thead>
                            <tr>
                              <th>No.</th>
                              <th>Tanggal Laporan Masuk</th>
                              <th>Pemasukan</th>
						                  <th>Pengeluaran</th>
                              <th>Saldo</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody id="data_keuangan">
                            <tr>
					                	<?php
                            $no = 1;
					                	foreach($laporan as $row):
                              if($row['pemasukan'] > 0){
                                $cls = "text-success";
                                $syms = "+";
                              } else {
                                $cls = "";
                                $syms = "";
                              }
                              if($row['pengeluaran'] > 0){
                                $clss = "text-danger";
                                $sym = "-";
                              } else {
                                $clss = "";
                                $sym = "";
                              }
					                	?>
					                	<tr>
                              <td><?= $no; ?></td>
					                		<td><?= htmlentities(strip_tags(trim($row['tanggal'])));?></td>
					                		<td class="<?= $cls?>">Rp. <?= htmlentities(strip_tags(trim($row['pemasukan']))); ?> <?=$syms;?></td>
					                		<td class="<?= $clss?>">Rp. <?= htmlentities(strip_tags(trim($row['pengeluaran'])));?> <?=$sym;?></td>
					                		<td>Rp. <?= htmlentities(strip_tags(trim($row['saldo'])));?></td>
					                		<td><?= htmlentities(strip_tags(trim($row['keterangan'])));?></td>
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
                  <form class="forms-sample" id="my-form">
                    <div class="form-group" >
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input name="tanggal" type="text" class="form-control" id="datepicker" placeholder="Tanggal Laporan Dibuat" required>
                    </div>
                    <div class="form-group">
            <label><input type="radio" name="jenis-form" class="m-1" value="keuangan" checked> Keuangan</label>
            <label><input type="radio" name="jenis-form" class="m-1" value="proker"> Proker</label>
        </div>
                    <div id="keuangan-form" style="display: block ;">
                      <label for = "pemasukanK">Pemasukan</label>
                      <input type="number" name="moneyin" class="form-control m-2" id="pemasukanK" placeholder="Masukan Jumlah Pemasukan">
                      <label for = "pengeluaranK">Pengeluaran</label>
                      <input type="number" name="moneyout" class="form-control m-2" id="pengeluaranK" placeholder="Masukan Jumlah Pengeluaran">
                      <label for = "pengeluaranK">Keterangan Pelaporan Keuangan</label>
                      <textarea name="keterangan1" class="form-control m-2" placeholder="Masukan Keterangan Uangnya Untuk Apa Saja"></textarea>
                      <button type="button" id="buat_laporan_keuangan" class="btn btn-primary mr-2" value="keuangan">Buat</button>
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
                      <button type="button" id="buat_laporan_proker" class="btn btn-primary mr-2" value="proker">Buat</button>
                    </div>
                  </form>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalButton">Close</button>
              </div>
            </div>
          </div>
        </div>
          <!-- content-wrapper ends -->