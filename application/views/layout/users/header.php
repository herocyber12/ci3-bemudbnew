<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');
$nama = $this->session->userdata('Nama');
$nim = $this->session->userdata('Nim');
$prodi = $this->session->userdata('Prodi');
$divisi = $this->session->userdata('Divisi');
$foto_profil = $this->session->userdata('foto_profil');

if(empty($this->session->userdata('islogin_in'))){
  redirect('landing/login');
}

$foto = "";

if(empty($this->session->userdata('foto_profil'))){
  $foto = "bg-2.jpg";
} else{
  $foto = $this->session->userdata('foto_profil');
}

$this->db->where('uid',$this->session->userdata('Uid'));
  $this->db->where('changelog_view',0);
  $changelog_view = $this->db->get('loginuser')->result();
  
  if($changelog_view){
    echo "<script>
    window.addEventListener('DOMContentLoaded', function() {
      var modal = new bootstrap.Modal(document.getElementById('changelogModal'));
      modal.show();
    });
  </script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 
    <title><?= $title ?></title>
    <meta content="bem" name="keywords" />
    <meta content="Untuk menjadikan mahasiswa bem yang akan menjadi pelajar universitas serta mahasiswa yang akan calon penerus di bem ikutkan program bem sebagai kursus mem" name="description" />
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url('asset/vendors/typicons.font/font/typicons.css')?>">
    <link rel="stylesheet" href="<?= base_url('asset/vendors/css/vendor.bundle.base.css')?>">
	 <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@mdi/font@6.9.96/css/materialdesignicons.min.css">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('asset/css/vertical-layout-light/style.css')?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('asset/images/Logo BEM UNIV FIX.webp')?>" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?= $autoDelet; ?>

      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="beranda"><img src="<?= base_url('asset/images/Logo BEM UNIV FIX BGT.webp');?>" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="beranda"><img src="<?= base_url('asset/images/Logo BEM UNIV FIX.webp');?>" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown  d-flex">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="typcn typcn-bell mr-0"></i>
                <?php
                  // if($notifikasi > 0){
                  //   echo "<span class='count bg-danger'>$jumlah_notif</span>";
                  // }
                ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
               	  <?php 
				  	foreach($notifi as $data):
				  ?>
				  <a class="dropdown-item preview-item">
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal"><?php echo $data['notifikasi_judul']; ?></h6>
              <p class="font-weight-light small-text mb-0">
                <?php echo $data['notifikasi_isi']; ?>
              </p>
            </div>
          </a>
          <?php
					endforeach;
				  ?>
              </div>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
                <i class="typcn typcn-user-outline mr-0"></i>
                <span class="nav-profile-name"><?php echo $this->session->userdata('Nama'); ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="<?=  site_url('profil')?>">
                <i class="typcn typcn-cog text-primary"></i>
                Settings
                </a>
                <a class="dropdown-item" href="<?= site_url('landing/ck_logout');?>">
                <i class="typcn typcn-power text-primary"></i>
                Logout
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        
        <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <div class="d-flex sidebar-profile">
            <div class="sidebar-profile-image">
                <?php 
					if(empty($this->session->userdata['foto_profil'])){
						echo "<img src='../asset/images/woman.png'>";
					} else{
            foreach ($rows->result_array() as $data1):
						echo "<img src='../asset/images/foto_profil/$data1[foto_profil]'>";
            endforeach;
					}
				?>
                <span class="sidebar-status-indicator"></span>
              </div>
              <div class="sidebar-profile-name">
                <p class="sidebar-name">
                  <?php echo $this->session->userdata('Nama'); ?>
                </p>	
                <p class="sidebar-designation">
                  <?php echo $this->session->userdata('Divisi'); ?>
                </p>
              </div>
            </div>
            <p class="sidebar-menu-title">Dash menu</p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('home');?>">
              <i class="typcn typcn-device-desktop menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
			<p class="sidebar-menu-title">Absensi</p>
      <li class="nav-item">
            <a class="nav-link" href="<?= site_url('absensi')?>">
              <i class="mdi mdi-file-document menu-icon"></i>
              <span class="menu-title">Absen Rapat</span>
            </a>
          </li>
			<p class="sidebar-menu-title">Proker Page</p>
			<li class="nav-item">
            <a class="nav-link" href="<?= site_url('laporan')?>">
              <i class="mdi mdi-file-document menu-icon"></i>
              <span class="menu-title">Laporan</span>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?= site_url('proker') ?>">
              <i class="mdi mdi-account-hard-hat menu-icon"></i>
              <span class="menu-title">Proker</span>
            </a>
          </li>
			<p class="sidebar-menu-title">Administrasi</p>
		  <li class="nav-item">
            <a class="nav-link" href="<?= site_url('surat') ?>">
              <i class="mdi mdi-file-cabinet menu-icon"></i>
              <span class="menu-title">Surat</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="mdi mdi-newspaper menu-icon"></i>
              <span class="menu-title">Artikel</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="<?= site_url('artikel')?>">Buat Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('artikel/daftar_artikel')?>">Daftar Artikel</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>

      <!--START Notifikasi Changelog -->
      <?php
      $changelog = $this->db->get('changelog');
      foreach($changelog->result_array()as $a):
      ?>
      <div class="modal fade" id="changelogModal" tabindex="-1" aria-labelledby="changelogModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">ChangeLog</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <table>
                    <tr>
                      <td>Web BEM UDB <?= $a['versi'];?></td>
                    </tr>
                    <tr>
                      <td><h6><?= $a['tanggal'];?></h6></td>
                    </tr>
                    <tr>
                      <td><?= $a['new'];?></td>
                    </tr>
                  </table>
                </div>
              <div class="modal-footer">
                <form method="post" action="<?= site_url('home') ?>">
                  <button type="submit" name="submit" class="btn btn-secondary" value="close">Close</button>
                </form>
              </div>
            </div>
          </div>
      </div>
      
      <?php
      endforeach;
      ?>
      <!--END Notifikasi Changelog -->