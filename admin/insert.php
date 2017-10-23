<?php
include "../library/koneksi.php";
	
$judul_kegiatan					= $_POST['jdl_kegiatan'];
$bulanawal				= $_POST['target_wkt_capai1'];
$bulanakhir				= $_POST['target_wkt_capai2'];
$target_capai 	    			= $_POST['target_capai'];
$presentase_target_capai 	    = $_POST['pre_target_capai'];
$realisasi_capai	        	= $_POST['realisasi_capai'];
$presentase_realisasi	        = $_POST['pre_realisasi'];
$tahun					        = $_POST['id_tahun'];

$query = "INSERT INTO penelitian (no, jdl_kegiatan, target_wkt_capai, target_capai, pre_target_capai, realisasi_capai, pre_realisasi, tahun) 
			VALUES 
		 ('', '$judul_kegiatan', '$bulanawal _ $bulanakhir', '$target_capai', '$presentase_target_capai', '$realisasi_capai', '$presentase_realisasi', '$tahun')";
//var_dump($query);die();
$query = mysql_query($query);
if ($query){ 
	echo "<script>alert('Data penelitian Berhasil dimasukan!'); document.location = '?menu=penelitian'</script>";	
} else {
	echo "<script>alert('Data penelitian Gagal dimasukan!'); document.location = '?menu=penelitian'</script>";	
}

?>  