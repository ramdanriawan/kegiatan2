<?php
include_once("../library/koneksi.php");
if($_GET["aksi"] && $_GET["no"]){
$id = $_GET['no'];
$query = "select* from pengembangan where no='$no'";
$exe = mysql_query($query);
$data = mysql_fetch_array($exe);
if(isset($_POST['kegiatan'])){
	$No = $_POST['no'];
	$jdl_kegiatan = $_POST['judulkegiatan'];
	$t_wkt = $_POST['targetwaktu'];
	$t_capai = $_POST['targetcapaian'];
	$p_t_capai = $_POST['persentargetcapaian'];
	$r_capai = $_POST['realisasicapaian'];
	$p_r_capai = $_POST['persenrealisasicapaian'];
	$tahun = $_POST['tahun'];
$query = "update pengembangan set no='$no',jdl_kegiatan='$jdl',target_wkt_capai='$t_wkt',target_capai='$t_capai',pre_target_capai='$p_t_capai',realisasi_capai='$r_capai',pre_realisasi='$p_r_capai', tahun='$tahun' where id='$id'";
$run = mysql_query($query);
if($run){
	?>
	<script>alert('Data Berhasil Diedit');
	document.location=('index.php?menu=pengembangan');</script>
	<?php
}else{
	echo"gagal";
}
	}
}
?>

<div class="span9">
	<div class="well" style="fixed:center;">

	 <?php
$query = mysql_query("SELECT * FROM pengembangan WHERE no='$_GET[no]'");
$data  = mysql_fetch_array($query);
?>
		<b>Edit Data Pengembangan</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
			</div>
						<div class="form-group">
						<?php echo $data['no'];?>" 
						<label class="control-label col-lg-4">No</label>
							<div class="col-lg-4">
								<input type="text" name="no" value="<?php echo $data["no"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Judul Pengembangan</label>
							<div class="col-lg-4">
								<input type="text" name="judul" value="<?php echo $data["jdl_kegiatan"];?>" required class="form-control" />
							</div> 
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">Target Waktu Capaian Output</label>
							<div class="col-lg-4">
								<input type="text" name="targetwaktu" value="<?php echo $data["target_wkt_capai"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="text" name="targetcapaian" value="<?php echo $data["target_capai"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4" for="dp1">Persentase Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="int" required name="persentargetcapaian" value="<?php echo $data["pre_target_capai"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Realisasi Capian Output</label>
							<div class="col-lg-4">
								<input type="text" required name="realisasicapaian" value="<?php echo $data["realisasi_capai"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Persentase Realisasi Capaian Output</label>
							<div class="col-lg-4">
								<input type="int" required name="persenrealisasicapaian" value="<?php echo $data["pre_realisasi"];?>" class="form-control" />
							</div>
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Tahun</label>
							<div class="col-lg-4">
								<input type="int" required name="tahun" value="<?php echo $data["tahun"];?>" class="form-control" />
							</div>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="kegiatan" value="Simpan" class="btn btn-primary" /> <a href="?menu=pengembangan" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
