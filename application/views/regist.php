<?php 
	foreach($calon->result_array() as $a):
		$uid = $a['uid'];
		$nama = $a['nama'];
		$divisi = $a['divisi'];
	endforeach;

if(empty($uid)){
  $this->session->set_flashdata('gagal_nama', '<div class="alert alert-danger">Nama Tidak Ditemukan</div>');
  redirect('landing/login');
}
?>
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
                <h4>Form Buat Akun</h4>
			        	<form class="forms-sample" action="<?php echo site_url('landing/update_data'); ?>" method="post">
			        	  <input type="hidden" name="uid" class="form-control" id="exampleInputNim1 "value="<?php echo $a['uid']; ?>">
                <div class="form-group">
			        	  <label for="exampleInputNim1">Nim (Max 10 Digit Min 9 Digit)</label>
			        	  <input type="text" name="nim" class="form-control" id="exampleInputNim1" placeholder="Nim" maxlength="10" minlength="9" required old>
			        	</div>
			        	 <div class="form-group">
			        	  <label for="exampleInputUsername1">Username (Max 12 Digit Min 8 Digit)</label>
			        	  <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username" maxlength="12" minlength="8" required old>
			        	</div>
			        	<div class="form-group">
			        	  <label for="exampleInputEmail1">Nama</label>
			        	  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" value="<?php echo $nama; ?>" required>
			        	</div>
			        	<div class="form-group">
			        	  <label for="exampleInputProdi1">Prodi</label>
			        	  <input type="text" name = "prodi"class="form-control" id="exampleInputProdi1" placeholder="Prodi" required old>
			        	</div>
			        	<div class="form-group">
			        	  <label for="exampleInputNoHp1">Nomor Hp (Max 12 Digit)</label>
			        	  <input type="text" name="no_hp" class="form-control" id="exampleInputNoHp1" placeholder="No HP Aktif" maxlength="12" required old>
			        	</div>
			        	<div class="form-group">
			        	  <label for="exampleInputConfirmPassword1">password</label>
			        	  <input type="password" name="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password" required>
			        	</div>
			        	<button type="submit" name="submit" class="btn btn-primary mr-2" value="Daftar">Daftar</button>
			          </form>
			        </div>
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
