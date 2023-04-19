        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
			  <?php 
			  	if(isset($_GET['pesan'])){
						if($_GET['pesan']=="gagal"){
							echo"<div class = 'alert alert-danger'>Gagal Membuat Artikel</div>";
						} elseif($_GET['pesan'] == "berhasil"){
							echo"<div class = 'alert alert-success'>Berhasil Membuat Artikel</div>";
						}
					}
			  ?>
            <div class="row">
             <div class="col-lg-12 grid-margin stretch-card">
			  <div class="card">
				<div class="card-body">
				  <h4 class="card-title">Daftar Artikel</h4>
				  <div class="table-responsive">
					<table class="table table-striped">
					  <thead>
						<tr>
						    <th>Tema Artikel</th>
						    <th>Tanggal</th>
						    <th>Gambar Artikel</th>
						    <th></th>
					    </tr>
					    <?php
					    	foreach($jumlahArtikel->result_array() as $row):
					    ?>
					    <tr>
					    	<td><?php echo $row['tema_artikel'];?></td>
					    	<td><?php echo $row['tanggal_artikel'];?></td>
					    	<td><?php echo $row['gmbr'];?></td>
					    	<td><?php echo anchor(base_url('artikel/delete_artikel/').$row['id_artikel'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); ?></td>
					    </tr>
						<?php
							endforeach;
						?>
					  </tbody>
					</table>
				  </div>
				</div>
			  </div>
			</div>
            </div>
          </div>
          <!-- content-wrapper ends -->