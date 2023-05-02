<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
date_default_timezone_set('Asia/Jakarta');

if($get_all_p > 0){
    $x = $this->db->get('posting');
    foreach($x->result_array() as $a):
    	$id=$a['posting_id'];
    	$tanggal = $a['posting_tanggal'];
    	$gmbr = $a['posting_gambar'];
    endforeach;

    $diff = strtotime($tanggal);
    // $newF = strtotime(date('Y-m-d'));
    // $diff = abs($tanggal-$newF);

    // $years = floor($diff / (365*60*60*24));
    // $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    // $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

    // $b = $this->db->query('SELECT DATEDIFF(DATE(NOW()), posting_tanggal) as Diffdate');
    $tanggal1 = date_create(date('Y-m-d'));
    $tanggal =  date_create($tanggal);
    
    $diff = date_diff($tanggal,$tanggal1);
    
    $days = $diff->d;

    if($days > 14){
    	if(unlink("asset/images/$gmbr")){
		    $this->db->query('DELETE FROM posting WHERE DATEDIFF(DATE(NOW()), posting_tanggal) > 14');
	    }
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="bem" name="keywords" />
    <meta content="Badan Eksekutif Mahasiswa (BEM) adalah organisasi mahasiswa intra kampus yang merupakan lembaga eksekutif di tingkat Universitas/Institut/Sekolah Tinggi." name="description" />

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>images/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>asset/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>asset/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('asset/css/landing/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>asset/css/landing/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
<!--
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="sr-only">Loading...</span>
      </div>
    </div>
-->
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-map-marker-alt text-primary me-2"></small>
            <small>Jl. Pinang No. 47, Jati, Cemani, Kec. Grogol, Kab. Sukoharjo, Jateng</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center py-3">
            <small class="far fa-clock text-primary me-2"></small>
            <small>Senin - Sabtu : 08.00 - 16.00 </small>
          </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center py-3 me-4">
            <small class="fa fa-phone-alt text-primary me-2"></small>
            <small>+62 8515 6078 295</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.instagram.com/bem.udb"
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->
	  
    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <a href="<?= base_url(); ?>" class="navbar-brand p-0">
        <img class="img-fluid me-3" src="<?php echo base_url(); ?>asset/images/icon/icon-10.png" alt="Icon" />
        <h1 class="m-0 text-primary">BEM UDB</h1>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
        <div class="navbar-nav ms-auto">
          <a href="<?php echo site_url(); ?>" class="nav-item nav-link">Home</a>
			<a href="<?php echo site_url(); ?>landing/beritalist" class="nav-item nav-link">Berita</a>
          <div class="nav-item dropdown">
            <a
              href="#"
              class="nav-link dropdown-toggle"
              data-bs-toggle="dropdown"
              >Tentang kami</a
            >
            <div class="dropdown-menu rounded-0 rounded-bottom m-0">
              <a href="<?php echo base_url(); ?>landing/anggota" class="dropdown-item">Anggota</a>
              <a href="<?php echo base_url(); ?>landing/prokerbem" class="dropdown-item">Proker</a>
			  <a href="<?php echo base_url(); ?>landing/struktur" class="dropdown-item">Struktur Ormawa UDB</a>
            </div>
          </div>
          <a href="<?php echo base_url(); ?>landing/contact" class="nav-item nav-link">Contact</a>
        </div>
        <a href="<?php echo base_url(); ?>landing/login" class="btn btn-primary"
          >Login<i class="fa fa-arrow-right ms-3"></i
        ></a>
      </div>
    </nav>
    <!-- Navbar End -->