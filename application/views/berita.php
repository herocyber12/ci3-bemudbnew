	 <!-- Bagan Berita start-->
	 <?php foreach($berita as $brt): ?>
	  <div class = "container-fluid py-5">
		  <div class="container-xxl mt-3 my-md-4">
			<div class="text-center">
					
					<div class="p-2 ">
						<h2><?php echo $brt['tema_artikel']?></h2>
					</div>
					<div class="p-2 mb-5">
						<?php echo "<img src='../../asset/images/$brt[gmbr]' width='45%' height='Auto' />";?>
					</div>
				</div>
			  <div class=" justify-content-between">
					<div class="p-2">
						<?php echo $brt['tanggal_artikel'];?>
					</div>
					<div class="p-2" style="text-align: justify">
						<p><strong>BEM UDB SURAKARTA </strong> - <?php echo $brt['isi_artikel'];?></p>
					</div>
	  		
	  	</div>
	  </div>
	  </div>
	  <?php endforeach; ?>
	  <!-- Bagan berita end -->
	  	
	