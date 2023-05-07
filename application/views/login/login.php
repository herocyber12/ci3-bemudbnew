				  <div>
                <img src="<?php echo base_url(); ?>asset/images/Logo BEM UNIV FIX BGT.webp" alt="logo">
					  </div>
				  <div>
					<a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-light bg-transparent"><span class="mdi mdi-arrow-left"></span>Kembali</button></a>
				  </div>
              </div>
              <h4>Log In</h4>
				<?php
        
					if($this->session->flashdata('gagal_login') == TRUE):
            echo $this->session->flashdata('gagal_login');
          elseif($this->session->flashdata('gagal_nama') == TRUE):
            echo $this->session->flashdata('gagal_nama');
          elseif($this->session->flashdata('gagal_nama1') == TRUE):
            echo $this->session->flashdata('gagal_nama1');
          elseif($this->session->flashdata('berhasil_akun') == TRUE):
            echo $this->session->flashdata('berhasil_akun');
          elseif($this->session->flashdata('gagal_akun') == TRUE):
            echo $this->session->flashdata('gagal_akun');
          elseif($this->session->flashdata('ganti_password') == TRUE):
            echo $this->session->flashdata('ganti_password');
          endif;
				?>
<<<<<<< Updated upstream
				<form class="pt-3" action="<?= base_url(); ?>landing/ck_login" method="post">
=======
				<form class="pt-3" action="<?= site_url('landing/ck_login')?>" method="post">
>>>>>>> Stashed changes
					<div class="form-group">
					  <input type="text" name="nama" aria-label="Nama" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Masukan Username" required>
					</div>
					<div class="input-group">
					    <input type="password" name="password" aria-label="Nama" class="form-control form-control-lg" id="password" placeholder="Masukan Password" required>
              <button type="button" class="input-group-text bg-transparent
              btn-inverse-white" onclick="togglepassword()"><i id="iconnya" class="mdi mdi-eye"></i></button>
            </div>
					<div class="mt-3">
					<button type="submit" name="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn mb-2">SIGN IN</button>
					</div>
        </form>
            <form class="pt-3" action="<?= site_url('registrasi/cari'); ?>" method="post">
            <a href="<?= site_url('landing/cari_username') ?>"><span>Lupa Kata Sandi ?</span></a>
            <h6>Belum punya akun dan Anggota BEM UDB ? Silahkan klik dibawah ini</h6> 
              <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg fonr-weight-medium auth-form-btn mt-1">Daftar</button>
<<<<<<< Updated upstream
            </form>
          
=======
        </form>
>>>>>>> Stashed changes
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->