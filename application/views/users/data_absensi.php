                    <table class="table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nim</th>
                          <th>Nama</th>
                          <th>Divisi</th>
                          <th>Tanggal</th>
                          <th>Jam</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
							        <?php  
                        $nim = $this->session->userdata('Nim');
                        $divisi = $this->session->userdata('Divisi');
							          if($this->session->userdata('Divisi') == "ketua" || $this->session->userdata('Divisi') == "wakil ketua" ||  $this->session->userdata('Divisi') == "sekretaris"){
							            $ambil1 =$this->db->query("SELECT *FROM absensi ORDER BY tngl desc");
                          $hasil_ambil1 = $ambil1->result_array();
							          } else{
							            $ambil1 = $this->db->query("SELECT *FROM absensi where divisi = '$divisi'");
							            $hasil_ambil1 = $ambil1->result_array();
							          } 
                        $no = 1;
					              foreach($hasil_ambil1 as $data1){
							        ?>	
                      <th><?= $no ?></th>
							        <td><?= $data1['nim']?></td>
							        <td><?= $data1['nama']?></td>
							        <td><?= $data1['divisi']?></td>
							        <td><?= $data1['tngl'];?></td>
							        <td><?= $data1['jam_skrng'];?></td>
							        <td><?= $data1['keterangan'];?></td>
                                </tr>
						          <?php
                      $no++;
							          }
						          ?>
                      </tbody>
                    </table>