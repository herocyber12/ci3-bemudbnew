				  <div>
                <img src="<?php echo base_url(); ?>asset/images/Logo BEM UNIV FIX BGT.webp" alt="logo">
					  </div>
				  <div>
					<a href="<?php echo base_url(); ?>"><button type="button" class="btn btn-light bg-transparent"><span class="mdi mdi-arrow-left"></span>Kembali</button></a>
				  </div>
              </div>
              <h4>Registrasi Akun</h4>
				<?php
        
					if($this->session->flashdata('gagal_login') == TRUE):
            echo $this->session->flashdata('gagal_login');
          endif;
				?>
				<form class="pt-3" action="<?php echo site_url('registrasi/register'); ?>" method="post">
					<div class="form-group">
					  <input type="text" name="cari" aria-label="Cari" class="form-control form-control-lg" id="exampleInputCari1" placeholder="Masukan Nama Anda" required>
					</div>
					<div class="mt-3">
					<button type="submit" name="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn">Cari</button>
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