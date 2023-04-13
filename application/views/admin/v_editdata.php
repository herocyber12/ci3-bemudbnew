<?php 
$divisi = "";
$ketua = "" ; $wakilketua = ""; $sekretaris=""; $bendahara="";
$sosial = ""; $psdm = ""; $pendidikanlitbang = ""; $kominfo = "";
$dalamnegri = ""; $luarnegri = ""; $kajianstrategi = "";

switch($divisi){
  case "ketua" 					          : $ketua 				= "selected"; break;
  case "wakil ketua" 			      	: $wakilketua 			= "selected"; break;
  case "sekretaris" 			      	: $sekretaris 			= "selected"; break;
  case "bendahara"				        : $bendahara 			= "selected"; break;
  case "sosial" 					        : $sosial 				= "selected"; break;
  case "psdm" 					          : $psdm 				= "selected"; break;
  case "pendidikan dan litbang" 	: $pendidikanlitbang 	= "selected"; break;
  case "kominfo" 					        : $kominfo 				= "selected"; break;
  case "dalam negri" 				      : $dalamnegri 			= "selected"; break;
  case "luar negri" 				      : $luarnegri 			= "selected"; break;
  case "kajian dan strategi" 		  : $kajianstrategi 		= "selected"; break;
}
?>
<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 d-flex grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <h4 class="card-title">Edit Anggota</h4>
                  <?php 
                    foreach($edits->result_array() as $data):
                  ?>
                  <form class="forms-sample" action="<?php base_url();?>../updateDataAnggota" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nim</label>
                      <input name="nim" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nim']; ?>" placeholder="Nim" readonly>
                    </div>
					          <div class="form-group">
                      <label for="exampleInputDate1">Nama</label>
                      <input name="nama" type="text" class="form-control" id="exampleInputDate1" value="<?php echo $data['nama']; ?>">
                    </div>
					          <div class="form-group">
                      <label for="exampleInputFile1">Prodi</label>
                      <input name="prodi" type="text" class="form-control" id="exampleInputFile1" value="<?php echo $data['prodi']; ?>">
                    </div>
					            <div class="form-group">
                      <label for="exampleInputFile1">Divisi</label>
                      <select name="divisi" class="form-control">
							          <option value="<?php echo $data['divisi']?>"><?php echo $data['divisi'] ?></option>
							          <option value="ketua" <?php $ketua?>>Ketua</option>
							          <option value="wakil ketua" <?php $wakilketua?>>Wakil Ketua</option>
							          <option value="sekretaris" <?php $sekretaris?>>Sekretaris</option>
							          <option value="bendahara" <?php $bendahara?>>Bendahara</option>
							          <option value="sosial" <?php $sosial?>>Sosial</option>
							          <option value="kominfo" <?php $kominfo?>>KOMINFO</option>
							          <option value="dalam negri" <?php $dalamnegri?>>Dalam Negri</option>
							          <option value="luar negri" <?php $luarnegri?>>Luar Negri</option>
							          <option value="kajian dan strategi" <?php $kajianstrategi?>>Kajian dan strategi</option>
							          <option value="pendidikan dan litbang" <?php $pendidikanlitbang?>>Pendidikan dan litbang</option>
							          <option value="psdm" <?php $psdm?>>PSDM</option>
					            </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2" value="Update">Update</button>
                  </form>
                  <?php 
                    endforeach;
                  ?>
                </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->