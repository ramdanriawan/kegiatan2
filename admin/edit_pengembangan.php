<?php
include_once("../library/koneksi.php");

if(isset($_POST['submit']) == "Update"){
	$no = $_POST['no'];
	$jdl_kegiatan = $_POST['jdl_kegiatan'];
	$tanggalawal = $_POST['target_wkt_capai1'];
	$tanggalakhir = $_POST['target_wkt_capai2'];
	$target_capai = $_POST['target_capai'];
	$pre_target_capai = $_POST['pre_target_capai'];
	$pre_realisasi = $_POST['pre_realisasi'];
	$realisasi_capai = $_POST['realisasi_capai'];
	$tahun = $_POST['id_tahun'];
	
	$query = "update pengembangan set jdl_kegiatan = '$jdl_kegiatan', target_wkt_capai = '$tanggalawal _ $tanggalakhir', target_capai = '$target_capai',
				pre_realisasi = '$pre_realisasi', pre_target_capai='$pre_target_capai', realisasi_capai='$realisasi_capai', tahun='$tahun' where No='$no'";
	//var_dump($query);die();
	$result = mysql_query($query);
	if ($result){ 
		echo "<script>alert('Update berhasil!'); document.location = '?menu=pengembangan'</script>";	
	} else {
		echo "<script>alert('Update gagal !'); document.location = '?menu=pengembangan'</script>";	
	}
}

$no = $_GET['no'];
$query = "select * from pengembangan where No='$no'";
$result = mysql_query($query);
while($data = mysql_fetch_array($result)){
	$no = $data['No'];
	$jdl_kegiatan = $data['jdl_kegiatan'];
	$tanggal = explode(" _ ", $data['target_wkt_capai']);
	$target_capai = $data['target_capai'];
	$pre_target_capai = $data['pre_target_capai'];
	$pre_realisasi = $data['pre_realisasi'];
	$realisasi_capai = $data['realisasi_capai'];
	$tahun = $data['tahun'];
}

?>

<div class="span9">
	<div class="well" style="fixed:center;">
		<b>Edit Data pengembangan</b>
		<p style="margin-top:10px;">
			<form action="" method="post" class="form-horizontal">			
				<div class="form-group">
					<label class="control-label col-lg-4">Judul Kegiatan pengembangan</label>
					<div class="col-lg-4">
						<input type="text" name="jdl_kegiatan" autofocus required class="form-control" value="<?php echo $jdl_kegiatan;?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Target Waktu Capaian Output</label>
					<div class="col-lg-4">
						<input type="month" name="target_wkt_capai1" autofocus required class="form-control" style="width:150px;float:left;" value="<?php echo $tanggal[0];?>"/>
						<span class="btn btn-default pull-left" style="margin: 0px 5px;"> Sampai </span>
						<input type="month" name="target_wkt_capai2" autofocus required class="form-control" style="width:150px;float:left;" value="<?php echo $tanggal[1];?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Target Capaian Output</label>
					<div class="col-lg-4">
						<input id="target_capai" type="text" name="target_capai" autofocus required class="form-control" value="<?php echo $target_capai;?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Persentase Target Capaian Output</label>
					<div class="col-lg-4">
						<input type="varchar" name="pre_target_capai" autofocus required class="form-control" value="<?php echo $pre_target_capai;?>"/>
					</div>
				</div>
				
				<div class="form-group">
					<label class="control-label col-lg-4">Realisasi Capaian Output</label>
					<div class="col-lg-2">
						<input type="text" class="form-control" name="realisasi_capai"  value="<?php echo $realisasi_capai;?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Persentase Realisasi Capaian Output</label>
					<div class="col-lg-4">
						<input type="varchar" required name="pre_realisasi" class="form-control" value="<?php echo $pre_realisasi;?>"/>
					</div>
				</div>
				<div class="form-group">
					<label for="id_tahun" class="control-label col-lg-4">Tahun</label></td>
					<div class="col-lg-4">
						<select name="id_tahun" id="id_tahun" required style="width: 100%;padding: 5px 0px;">
							<option value="<?php echo $tahun;?>"><?php echo $tahun;?></option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</div>
				</div>
				<div class="form-actions no-margin-bottom" style="text-align:center;">
					<input type="hidden" name="no" value="<?php echo $no;?>"/> 
					<input type="submit" name="submit" value="Update" class="btn btn-primary" /> 
					<a href="?menu=pengembangan" class="btn btn-warning">Back</a>				
				</div>

			<div class="text-right">
		  <a href="#"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
			</form>
	</div>
</div>
