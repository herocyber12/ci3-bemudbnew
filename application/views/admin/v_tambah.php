<?php 
$divisi = " ";

$ketua = "" ; $wakilketua = ""; $sekretaris=""; $bendahara="";
$sosial = ""; $psdm = ""; $litbangkastrat = ""; $kominfo = "";
$humas = "";

switch($divisi){
    case "ketua" 					: $ketua 				= "selected"; break;
    case "wakil ketua" 				: $wakilketua 			= "selected"; break;
    case "sekretaris" 				: $sekretaris 			= "selected"; break;
    case "bendahara"				: $bendahara 			= "selected"; break;
    case "sosial" 					: $sosial 				= "selected"; break;
    case "psdm" 					: $psdm 				= "selected"; break;
    case "litbang & kastrat" 		: $litbangkastrat 	= "selected"; break;
    case "kominfo" 					: $kominfo 				= "selected"; break;
    case "humas" 					: $humas 				= "selected"; break;
}
?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col">
        <div class="col-lg-12 grid-margin stretch-card m-2">
		  <div class="card">
			<div class="card-body">
			  <h4 class="card-title">Tambah Anggota BEM</h4>
			  <form class="forms-sample" action="insertAnggota" method="post">
				<div class="form-group">
				  <label for="exampleInputEmail1">Nama</label>
				  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama" required old>
				</div>
				<div class="form-group">
					<label for="exampleInputDivisi1">Divisi</label>
					<select name="divisi" class="form-control" id="exampleInputDivisi1" required old>
						<option>--Pilih divisi anda--</option>
						<option value="ketua" <?php $ketua?>>Ketua</option>
						<option value="wakil ketua" <?php $wakilketua?>>Wakil Ketua</option>
						<option value="sekretaris" <?php $sekretaris?>>Sekretaris</option>
						<option value="bendahara" <?php $bendahara?>>Bendahara</option>
						<option value="sosial" <?php $sosial?>>Sosial</option>
						<option value="kominfo" <?php $kominfo?>>KOMINFO</option>
						<option value="humas" <?php $humas?>>Humas</option>
						<option value="litbang & kastrat" <?php $litbangkastrat?>>Litbang & Kastrat</option>
						<option value="psdm" <?php $psdm?>>PSDM</option>
					</select>
				</div>
				<button type="submit" name="submit" class="btn btn-primary mr-2" value="Tambah">Tambah</button>
			  </form>
			</div>
		  </div>
		</div>
      </div>
    </div>
</div>

<!-- content-wrapper ends -->