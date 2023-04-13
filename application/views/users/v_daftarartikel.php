 <!-- partial -->
 <div class="main-panel">
          <div class="content-wrapper">
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
					    </tr>
						<?php
                            foreach($artikel as $row):
						?>
						<tr>
							<td><?php echo htmlentities(strip_tags(trim($row['tema_artikel'])));?></td>
							<td><?php echo htmlentities(strip_tags(trim($row['tanggal_artikel'])));?></td>
							<td><?php echo htmlentities(strip_tags(trim($row['gmbr'])));?></td>
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