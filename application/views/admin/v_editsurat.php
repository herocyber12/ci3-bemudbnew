<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Edit Anggota</h4>
                  <?php 
                    foreach($editSurat->result_array() as $data):
                  ?>
                  <form class="forms-sample" action="<?php site_url('pages/surat/updateSurat')?>" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID SURAT</label>
                      <input name="id_surat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['id_surat']; ?>" readonly>
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Nomor Surat</label>
                      <input name="nomor_surat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nomor_surat']; ?>">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputDate1">Tanggal</label>
                      <input name="tanggal_surat" type="date" class="form-control" id="exampleInputDate1" value="<?php echo $data['tanggal_surat']; ?>">
                    </div>
					  <div class="form-group">
                      <label for="exampleInputFile1">Keterangan</label>
                      <input name="kegunaan_surat" type="text" class="form-control" id="exampleInputFile1" value="<?php echo $data['kegunaan_surat']; ?>">
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