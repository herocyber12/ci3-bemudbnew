<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta content="<?= $keyword; ?>" name="keywords" />
  <meta content="<?= $description; ?>" name="description" />
  <title><?= $title; ?></title>
	
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/Logo BEM UNIV FIX.ico" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo justify-content-between row">
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
          endif;
				?>
				<form class="pt-3" action="<?= base_url(); ?>landing/ck_login" method="post">
					<div class="form-group">
					  <input type="text" name="nama" aria-label="Nama" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" required>
					</div>
					<div class="form-group">
					  <input type="password" name="password" aria-label="Password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" required>
					</div>
					<div class="mt-3">
					<button type="submit" name="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn mb-2">SIGN IN</button>
					</div>
              </form>
            <form class="pt-3" action="<?= site_url('registrasi/cari'); ?>" method="post">
            <a href="#"><span>Lupa Kata Sandi ?</span></a>
            <h6>Belum punya akun dan Anggota BEM UDB ? Silahkan klik dibawah ini</h6> 
              <button type="submit" name="submit" class="btn btn-block btn-primary btn-lg fonr-weight-medium auth-form-btn mt-1">Daftar</button>
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
  <!-- base:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>asset/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/template.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
