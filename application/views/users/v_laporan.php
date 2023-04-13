<?php 
$jns_status = "";

$berjalan; $tidak_berjalan;

switch($jns_status){
    case "Berjalan"	: $berjalan = "selected"; break;
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
             <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Laporan</h4>
                  <form class="forms-sample" action="insertLaporan" method="post">
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
                      <input type="text" name="namaproker" class="form-control m-2" id="pemasukanK" placeholder="Masukan Jumlah Pemasukan">
                      <label for = "pengeluaranK">Status</label>
                      <select class="form-control m-2" name="status">
                        <option value="Berjalan<?php $berjalan ?>">Berjalan</option>
                        <option value="Tidak Berjalan<?php $tidak_berjalan ?>">Tidak Berja  lan</option>
                      </select>
                      <label>Keterangan Proker</label>
                      <textarea name="keterangan2" class="form-control m-2" placeholder="Masukan Keterangan Proker"></textarea>
                      <button type="submit" name="submit" class="btn btn-primary mr-2" value="proker">Buat</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
              <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Arsip Laporan</h4>
                  <div class="table-responsive">
                    <table class="table overflow-auto">
                      <thead>
                        <tr>
                          <th>Divisi</th>
                          <th>Tanggal</th>
						              <th>Jenis Laporan</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
						<?php
							foreach($laporan as $row):
						?>
						<tr>
							<td><?php echo htmlentities(strip_tags(trim($row['divisi'])));?></td>
							<td><?php echo htmlentities(strip_tags(trim($row['tanggal'])));?></td>
							<td><?php echo htmlentities(strip_tags(trim($row['jns_laporan'])));?></td>
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
          <!-- content-wrapper ends -->