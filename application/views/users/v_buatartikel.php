 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <?php 
              if($this->session->flashdata('berhasil_artikel') == TRUE){
                echo $this->session->flashdata('berhasil_artikel');
              }
            ?>
            <div class="row">
             <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Buat Artikel</h4>
                  <form class="forms-sample" action="<?= site_url('artikel/input_artikel')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul Artikel</label>
                      <input name="tema" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul Artikel" required>
                    </div>
					          <div class="form-group">
                      <label for="exampleInputDate1">Tanggal</label>
                      <input name="tanggal" type="date" class="form-control" id="exampleInputDate1" required>
                    </div>
					          <div class="form-group">
                      <label for="exampleInputFile1">File Dokumentasi</label>
                      <input name="file" type="file" class="form-control" id="exampleInputFile1" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Keterangan</label>
                      <textarea class="ckeditor" name="alasan" id="ckeditor" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="BUAT">Buat</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->