	 <!-- Bagan Berita start-->
	 <?php foreach($berita as $brt): ?>
	  <div class = "container">
		  <div class="d-flex justify-content-center">
			<div class="col-7 d-grid text-center">
					
					<div class="p-2 text-center">
						<h2><?php echo $brt['tema_artikel']?></h2>
					</div>
					<div class="p-2 mb-5">
						<?php echo "<img src='../../asset/images/$brt[gmbr]' class='img-fluid' />";?>
					</div>
				
			  <div class="container-fluid">
					<div class="p-2">
						<?php echo $brt['tanggal_artikel'];?>
					</div>
					<div class="p-2" style="text-align: justify">
						<p><strong>BEM UDB SURAKARTA </strong> - <?php echo $brt['isi_artikel'];?></p>
					</div>
				</div>
	  		
	  	</div>
	  </div>
	  </div>
	  <?php endforeach; ?>
	  <!-- Bagan berita end -->
	  	
	