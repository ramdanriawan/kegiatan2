<?php
include "../library/koneksi.php";
	
$judul_kegiatan					= $_GET['jdl_kegiatan'];
$bulanawal						= $_GET['target_wkt_capai1'];
$bulanakhir						= $_GET['target_wkt_capai2'];
$target_capai 	    			= $_GET['target_capai'];
$presentase_target_capai 	    = $_GET['pre_target_capai'];
$realisasi_capai	        	= $_GET['realisasi_capai'];
$presentase_realisasi	        = $_GET['pre_realisasi'];
$tahun					        = $_GET['id_tahun'];

$query = "INSERT INTO $_GET[insert_to] (no, jdl_kegiatan, target_wkt_capai, target_capai, pre_target_capai, realisasi_capai, pre_realisasi, tahun) 
			VALUES 
		 ('', '$judul_kegiatan', '$bulanawal _ $bulanakhir', '$target_capai', '$presentase_target_capai', '$realisasi_capai', '$presentase_realisasi', '$tahun')";
//var_dump($query);die();
$query = mysql_query($query);
if ($query){ 
	echo "<script>alert('Data $_GET[insert_to] Berhasil dimasukan!'); document.location = 'index.php?menu=$_GET[insert_to]'</script>";	
} else {
	echo "<script>alert('Data $_GET[insert_to] Gagal dimasukan!'); document.location = 'index.php?menu=$_GET[insert_to]'</script>";	
}

?>  