				  <div>
                <img src="<?= base_url('asset/images/Logo BEM UNIV FIX BGT.webp'); ?>" alt="logo">
					  </div>
				  <div>
					<a href="<?= site_url('landing/login') ?>"><button type="button" class="btn btn-light bg-transparent"><span class="mdi mdi-arrow-left"></span>Kembali</button></a>
				  </div>
              </div>
              <h4>Cari Username</h4>
				<?php
        
					if($this->session->flashdata('username_tidak_ada') == TRUE):
            echo $this->session->flashdata('username_tidak_ada');
          endif;
				?>
				<form class="pt-3" action="<?= site_url('landing/ganti_password') ?>" method="post">
					<div class="form-group">
					  <input type="text" name="username" aria-label="Nama" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Masukan Username Anda" required>
					</div>
					<div class="mt-3">
					<button type="submit" name="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn mb-2">Cari</button>
					</div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->