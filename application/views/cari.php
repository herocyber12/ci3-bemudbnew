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
