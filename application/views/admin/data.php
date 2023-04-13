                                <table class="table table-striped">
								  <thead>
									<tr>
										<th>ID CALON</th>
										<th>Nama </th>
										<th>Prodi</th>
									 	<th>Nomor HP </th>
									  	<th>E-MAIL </th>
										<th>Divisi</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								  </thead>
								  <tbody>
									
									<?php
                                        foreach($calon->result_array() as $data1):
									?>
									<tr>
									  <td>
										<?php echo $data1['id_oprec'];?>
									  </td>
										<td>
										<?php echo $data1['nama'];?>
									  </td>
									  <td>
										 <?php echo $data1['prodi'];?>
									  </td>
									  <td>
										 <?php echo $data1['no_hp'];?>
									  </td>
									  <td>
										 <?php echo $data1['email'];?>
									  </td>
										<td>
										 <?php echo $data1['divisi'];?>
									  </td>
										<th>
											<?php 
				if($data1['status'] == "Diterima"){
                  echo "<td class='d-flex'><button class = 'btn btn-success' disabled><i class = 'mdi mdi-check'></i>$data1[status]</button>";
                  echo anchor(base_url('admin/delete_calon/').$data1['id_oprec'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); 
                  echo"</td>";
                }elseif($data1['status'] == "Ditolak"){
                  echo "<td class='d-flex'><button class = 'btn btn-warning' disabled><i class = 'mdi mdi-hand-back-left'></i>$data1[status]</button>";
                  echo anchor(base_url('admin/delete_proker/').$data1['id_oprec'],'<button type="submit" name="delete" class="btn btn-danger m-2" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>'); 
                  echo"</td>";
                } else{
                  echo "<td class='d-flex'>";
                  echo anchor(base_url('admin/konfirmasi_calon/').$data1['id_oprec'],'<button type="submit" class="btn btn-success mr-1" name="submit" value="konfirmasi"><i class="mdi mdi-check"></i>Terima</button>');
                  echo anchor(base_url('admin/tolak_calon/').$data1['id_oprec'],'<button type="submit" class="btn btn-warning" name="submit" value="tolak"><i class="mdi mdi-hand-back-left"></i>Tolak</button>');
                  echo anchor(base_url('admin/delete_calon/').$data1['id_oprec'],'<button type="submit" name="delete" class="btn btn-danger ml-1" value="Hapus"><i class="mdi mdi-trash-can"></i>Hapus</button>');
                  echo "</div>";
                }
											?>
										</th>
									</tr>
									  <?php
										endforeach;
									  ?>
								  </tbody>
								</table>