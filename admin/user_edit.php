<?php
include_once("../library/koneksi.php");
if($_GET["aksi"] && $_GET["nmr"]){
$id = $_GET['nmr'];
$query = "select* from tabel_user where id='$id'";
$exe = mysql_query($query);
$data = mysql_fetch_array($exe);
if(isset($_POST['pasien'])){
	$jdl = $_POST['No'];
	$t_wkt = $_POST['Username'];
	$t_capai = $_POST['Nama_'];
	$p_t_capai = $_POST['persentargetcapaian'];
	$r_capai = $_POST['realisasicapaian'];
	$p_r_capai = $_POST['persenrealisasicapaian'];
$query = "update tabel_penelitian set jdl_kegiatan='$jdl',target_wkt_capai='$t_wkt',target_capai='$t_capai',pre_target_capai='$p_t_capai',realisasi_capai='$r_capai',pre_realisasi='$p_r_capai' where id='$id'";
$run = mysql_query($query);
if($run){
	?>
	<script>alert('Data Berhasil Diedit');
	document.location=('index.php?menu=penelitian');</script>
	<?php
}else{
	echo"gagal";
}
	}
}
?>
<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit User Admin</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">No</label>
							<div class="col-lg-4">
								<input type="text" name="no" value="<?php echo $data["no"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
						<label class="control-label col-lg-4">
						Username</label>
							<div class="col-lg-4">
								<input type="text" name="username" value="<?php echo $data["username"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
						Password</label>
							<div class="col-lg-4">
								<input type="text" name="password" value="<?php echo $data["password"];?>" required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">
						Nama Lengkap</label>
							<div class="col-lg-4">
								<input type="text" name="namalengkap" value="<?php echo $data["nama_lengkap"];?>" required class="form-control" />
							</div>
						<div class="form-group">
							<label class="control-label col-lg-4">No Telp/Hp</label>
							<div class="col-lg-4">
								<input type="text" name="notelp_hp" value="<?php echo $data["no_telp_hp"];?>" required class="form-control" />
							</div>
						</div>
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="kegiatan" value="Simpan" class="btn btn-primary" /> <a href="?menu=user" class="btn btn-warning">Batal</a>
						</div>

					</form>
	</div>
</div>
