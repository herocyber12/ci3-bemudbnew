				  <div>
                <img src="<?= base_url('asset/images/Logo BEM UNIV FIX BGT.webp'); ?>" alt="logo">
					  </div>
				  <div>
					<a href="<?= site_url('landing/login') ?>"><button type="button" class="btn btn-light bg-transparent"><span class="mdi mdi-arrow-left"></span>Kembali</button></a>
				  </div>
              </div>
              <h4>Ganti Password</h4>
				<?php
        
					if($this->session->flashdata('username_ada') == TRUE):
            echo $this->session->flashdata('username_ada');
          endif;
				?>
				<form class="pt-3" action="<?= site_url('landing/ck_password') ?>" method="post">
					<div class="form-group">
            <input type="hidden" name="username" class="form-control form-control-lg mb-3" value="<?= $username ?>" readonly>
            <div class="input-group">
					    <input type="password" name="password" aria-label="Nama" class="form-control form-control-lg" id="password" placeholder="Masukan Password Baru" required>
              <button type="button" class="input-group-text bg-transparent
              btn-inverse-white" onclick="togglepassword()"><i id="iconnya" class="mdi mdi-eye"></i></button>
              </div>
            </div>
					<div class="mt-3">
					<button type="submit" name="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn mb-2">Ganti Password</button>
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
