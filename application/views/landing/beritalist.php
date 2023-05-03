<div class="container">
	  	<div class="d-flex justify-content-center mt-3">
			<div class="col-7 row d-grid">
			<?php
				$sql = $this->db->get('artikel');
			foreach($berita as $a):
				$judul = $a['tema_artikel'];
				$tanggal = $a['tanggal_artikel'];
				$isi = $a['isi_artikel'];
				?>
				<a href="<?= site_url()?>landing/berita/<?= $a['id_artikel'] ?>">
				<div class="d-flex mt-3">
					<div class="col-3">
						<img src="../asset/images/cover.jpg" class="img-fluid">
					</div>
					<div class="col-9 d-grid m-4">
						<h3><?= $judul; ?></h3>
						<h6><span><?= $tanggal; ?></span></h6>
						<span class="d-inline-block text-truncate" style="max-width: 75%;">
						<?= $isi; ?>
						</span>
					</div>
				</div>
				</a><?php
			endforeach;
			?>
			
			</div>
		
      </div>
	  </div>