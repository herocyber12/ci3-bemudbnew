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
  <link rel="stylesheet" href="<?= base_url('asset/vendors/typicons.font/font/typicons.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('asset/vendors/css/vendor.bundle.base.css'); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('asset/vendors/mdi/css/materialdesignicons.min.css') ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url('asset/css/vertical-layout-light/style.css'); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url('asset/images/Logo BEM UNIV FIX.ico'); ?>" />
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

  <!-- base:js -->
  <script src="<?= base_url('asset/vendors/js/vendor.bundle.base.js') ?>"></script>
  <!-- endinject -->

  <!-- inject:js -->
  <script src="<?= base_url('asset/js/off-canvas.js'); ?>"></script>
  <script src="<?= base_url('asset/js/hoverable-collapse.js'); ?>"></script>
  <script src="<?= base_url('asset/js/template.js'); ?>"></script>
  <script src="<?= base_url('asset/js/settings.js'); ?>"></script>
  <script src="<?= base_url('asset/js/todolist.js'); ?>"></script>
</body>

</html>
