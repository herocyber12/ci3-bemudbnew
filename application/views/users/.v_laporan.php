<?php 
$jns_laporan = "";

$laporan_proker; $laporan_keuangan;

switch($jns_laporan){
    case "Laporan Proker"	: $laporan_proker = "selected"; break;
    case "Laporan Keuangan" : $laporan_keuangan = "selected"; break;
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
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" id="exampleInputEmail1" required>
                    </div>
					  <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Jenis Laporan</label>
                      <select name="jns_laporan" id="exampleInputConfirmPassword1" class="form-control" required>
						<option>--Pilih Jenis Laporan--</option>
						<option value="Laporan Keuangan" <?php $laporan_keuangan;?>>Laporan Keuangan</option>
						<option value="Laporan Proker" <?php $laporan_proker;?>>Laporan Proker</option>
					  </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      <textarea class="form-control" name="alasan" id="exampleTextarea1" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="BUAT">Buat</button>
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