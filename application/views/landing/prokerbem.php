<!-- Page Header Start -->
    <div
      class="container-fluid header-bg py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-4 text-white mb-3 animated slideInDown">
         Proker BEM UDB
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
              <a class="text-white" href="<?php echo base_url();?>">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a class="text-white" href="#">Pages</a>
            </li>
            <li class="breadcrumb-item text-primary active" aria-current="page">
              Proker Bem
            </li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

<!-- Animal Start -->
    <div class="container-xxl py-5 wow fadeIn"
          data-wow-delay="0.1s">
      <div class="container">
        <div
          class="row g-5 mb-5 align-items-end"
        >
          <div class="col-lg-6">
            <p><span class="text-primary me-2">#</span>Proker</p>
            <h1 class="display-5 mb-0">
            Proker BEM UDB&nbsp; </h1>
          </div>
          
        </div>
        <div class="row g-4">
          <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
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
