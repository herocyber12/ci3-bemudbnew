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
                  <form class="forms-sample" action="<?= site_url('changelogs/input_changelog')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Versi</label>
                      <input name="versi" type="text" class="form-control" id="exampleInputEmail1" placeholder="Example : V2.5" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Apa Yang Baru ?</label>
                      <textarea class="ckeditor" name="new" id="ckeditor" rows="4" placeholder="Isi sesuai dengan apa yang baru di perbarui" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="BUAT">Buat</button>
                  </form>
                </div>
              </div>
            </div>
            </div>
          </div>
          <!-- content-wrapper ends -->