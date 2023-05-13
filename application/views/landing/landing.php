<!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
      <div class="row g-0 flex-column-reverse flex-lg-row">
        <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="header-bg h-100 d-flex flex-column justify-content-center p-5"
          >
            <h1 class="display-4 text-light mb-5">
             Kabinet<br>Nawa Chandra Niscala
            </h1>
            <div class="d-flex align-items-center pt-4 animated slideInDown">
              
              <button
                type="button"
                class="btn-play"
                data-bs-toggle="modal"
                data-src="https://www.youtube.com/watch?v=fB0y0S9F1mQ"
                data-bs-target="#videoModal"
              >
                <span></span>
              </button>
              <h6 class="text-white m-0 ms-4 d-none d-sm-block">Watch Video</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
          <div class="owl-carousel header-carousel">
            <div class="owl-carousel-item">
              <img class="img-fluid" src="asset/images/carousel-2.jpg" alt="" />
            </div>
            <div class="owl-carousel-item">
              <img class="img-fluid" src="asset/images/carousel-1.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Video Modal Start -->
    <div
      class="modal modal-video fade"
      id="videoModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content rounded-0">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <!-- 16:9 aspect ratio -->
            <div class="ratio ratio-16x9">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/fB0y0S9F1mQ" title="YouTube video player" frameborder="0" allow=" autoplay" allowfullscreen allowscriptaccess="always" id="video" class="embed-responsive-item"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Video Modal End -->
	
	  <div
      class="container-xxl bg-primary news my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
		<p class="text-light"><span class="text-primary me-2">#</span>Berita</p>
      	<div class="container py-5">
        <div class="row g-4">
          <div class="card text-light" style="background-color: rgba(255,255,255,0.25); border-radius: 10px">
			<div class="card-head">
				<div class="text-center mt-4"><h1 class="text-light">Informasi Terbaru</h1></div>
			</div>
			  <div class="text-center">
				<div class="col wow fadeIn mb-5 mt-2" data-wow-delay="0.5s">
          			
						<?php
						if($get_all_p){
							?><div class="owl-carousel news-carousel">
					<?php
							foreach($postingane->result_array() as $row){
                    			$gambar = $row['posting_gambar'];?>
            			<div class="owl-carousel-item">
            	  			<a class="animal-item" alt="">
            	        		<img class="img-fluid" src="asset/images/<?php echo $gambar; ?>" alt="" />
            	       			<div class="animal-text p-4">
            	          			<h5 class="text-white mb-0"><?php echo $row['posting_judul']; ?></h5>
            	        		</div>
					 		</a>
            			</div>
						<?php 
							}
							?></div><?php
						} else {
							?>
            	  			<a class="animal-item" href="#" alt="">
            	        		<img class="img-fluid" src="asset/images/g ada konten.jpg" alt="" />
            	       			<div class="animal-text p-4">
            	          			<p class="text-white small text-uppercase mb-0">Belum ada konten</p>
            	          			<h5 class="text-white mb-0">BOSS</h5>
            	        		</div>
					 		</a>
						<?php
						}?>
				</div>
        	</div>
		</div>
        </div>
      </div>
    </div>
	  
    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p><span class="text-primary me-2">#</span>Welcome To BEM UDB</p>
            <h1 class="display-5 mb-4">
              Kenapa harus bergabung
              <span class="text-primary">BEM UDB</span> Surakarta
            </h1>
<!--
            <p class="mb-4">
              Di BEM Universitas Duta Bangsa Surakarta kalian bisa mengembangkan skill kalian baik itu softskill maupun hardskill kalian selain itu kalian juga bisa menambah relasi.

Informasi
            </p>
-->
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Melatih Softskill
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Melatih Hardskill
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Menambah Relasi
            </h5>
            <h5 class="mb-3">
              <i class="far fa-check-circle text-primary me-3"></i>Bisa Rebahan di ruang BEM Hehe
            </h5>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="img-border">
              <img class="img-fluid" src="asset/images/about.jpg" alt="" style="box-shadow: 1px 2px 3px rgba(0,0,0,0.4);" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div
      class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
		<p class="text-light"><span class="text-primary me-2">#</span>Visi dan Misi</p>
      <div class="container py-5">
        <div class="row g-4">
          <div class="card text-light" style="background-color: rgba(255,255,255,0.25); border-radius: 10px">
			<div class="card-head">
				<div class="text-center mt-4"><h1 class="text-light">VISI & MISI BEM UDB</h1></div>
			</div>
			<div class="m-4" >
    			<h3 class="text-light">VISI</h3>
    			<p>Menjadikan BEM UDB sebagai organisasi yang aktif, inovatif, dan bersinergi dalam lingkup kampus maupun masyarakat.</p>
    			<br>
    			<h3 class="text-light">MISI</h3>
    			<p><b>1.</b> Memotivasi seluruh mahasiswa agar terlibat aktif dalam kegiatan kemahasiswaan baik secara internal maupun ekternal.</p>
    			<p><b>2.</b> Menampung dan mewujudkan ide maupun aspirasi mahasiswa.</p>
    			<p><b>3.</b> Mengadakan kegiatan yang berdampak positif terhadap lingkungan sekitar.</p>
			</div>
		</div>
        </div>
      </div>
    </div>
    <!-- Facts End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div
          class="row g-5 mb-5 align-items-end wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Proker</p>
            <h1 class="display-5 mb-0">
            Proker BEM UDB&nbsp; </h1>
          </div>
          
        </div>
        <div class="row g-4">
          <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
              <div class="col-12">
                <table class="table table-bordered">
				  <thead>
					<tr>
					  	<th>No</th>
					  	<th>Nama Proker</th>
					  	<th>Divisi</th>
					  	<th>Keterangan</th>
					  </tr>
					</thead>
					<tbody>
						<?php 
            if($this->db->count_all('proker') != 0){
                $this->db->order_by('divisi','asc');
                $proker = $this->db->get('proker')->result_array();
                $no = 1 ;
                foreach($proker as $data): 
                    if($data['divisi'] == "ketua"){
                        $divisi = "PRESMA & WAPRESMA";
                    }
                    if($data['divisi'] == "bendahara"){
                        $divisi = "BENDAHARA";
                    }
                    if($data['divisi'] == "sekretaris"){
                        $divisi = "SEKRETARIS";
                    }
                    if($data['divisi'] == "psdm"){
                        $divisi = "PSDM";
                    }
                    if($data['divisi'] == "litbang & kastrat"){
                        $divisi = "Litbang Dan Kastrat";
                    }
                    if($data['divisi'] == "sosial"){
                        $divisi = "Sosial";
                    }
                    if($data['divisi'] == "KOMINFO"){
                        $divisi = "KOMINFO";
                    }
                    if($data['divisi'] == "humas"){
                        $divisi = "HUMAS";
                    }
                ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['namaproker']; ?></td>
                            <td><?php echo $divisi; ?></td>
                            <td></td>
                        </tr>
                <?php endforeach; 
            } else {
                echo "<tr>
						<td>1</td>
                        <td>Ketua Belum membuat Proker</td>
                        <td></td>
                       </tr>";
            }
            ?>
					</tbody>
				  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Animal End -->

    <!-- Visiting Hours Start -->
    <div
      class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-md wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">JAM KUNJUNGAN RUANGAN/ORMAWA LAIN</h1>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <span>Senin</span>
                <span>08:00 - 16:00 WIB</span>
              </li>
              <li class="list-group-item">
                <span>Selasa</span>
                <span>08:00 - 16:00 WIB</span>
              </li>
              <li class="list-group-item">
                <span>Rabu</span>
                <span>08:00 - 16:00 WIB</span>
              </li>
              <li class="list-group-item">
                <span>Kamis</span>
                <span>08:00 - 16:00 WIB</span>
              </li>
              <li class="list-group-item">
                <span>Jumat</span>
                <span>08:00 - 16:00 WIB</span>
              </li>
              <li class="list-group-item">
                <span>Sabtu</span>
                <span>08:00 - 14:00 WIB</span>
              </li>
              <li class="list-group-item">
                <span>Minggu</span>
                <span>Closed</span>
              </li>
            </ul>
			  <h1 class="display-6 text-white mb-2 mt-5">Contact Info</h1>
            <table class="table">
              <tbody>
                <tr>
                  <td>Kontak <br>Humas&nbsp;</td>
                  <td>
                    <p class="mb-2">+62 8384 3320 396</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- Visiting Hours End -->
	  
	  <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Kontak untuk bertanya</p>
            <h1 class="display-5 mb-0">
              Jika anda ingin bertanya bisa menghubungi
            </h1>
          </div>
          <div class="col-lg-6">
            <div
              class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5"
            >
              <i class="fa fa-3x fa-mobile-alt text-white"></i>
              <div class="ms-4">
                <p class="text-white mb-0">Hubungi jika ada pertanyaan</p>
                <h2 class="text-white mb-0">+62 8213 4667 487</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->