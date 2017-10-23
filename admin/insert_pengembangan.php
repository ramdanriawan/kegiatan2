<?php
include "../library/koneksi.php";
	
$No            					= $_POST['no'];
$judul_kegiatan					= $_POST['jdl_kegiatan'];
$target_waktu_capai				= $_POST['target_wkt_capai'];
$target_capai 	    			= $_POST['target_capai'];
$presentase_target_capai 	    = $_POST['pre_target_capai'];
$realisasi_capai	        	= $_POST['realisasi_capai'];
$presentase_realisasi	        = $_POST['pre_realisasi'];
$tahun					        = $_POST['tahun'];


$query = mysql_query("INSERT INTO pengembangan (No, jdl_kegiatan, target_wkt_capai, target_capai, pre_target_capai, realisasi_capai, pre_realisasi) VALUES ('$no', '$judul_kegiatan', '$target_waktu_capai', '$target_capai', '$presentasi_target_capai', '$realisasi_capai', '$presentasi_realisasi')");
if ($query){ 
	echo "<script>alert('Data pengembangan Berhasil dimasukan!'); window.location = 'pengembangan.php'</script>";	
} else {
	echo "<script>alert('Data pengembangan Gagal dimasukan!'); window.location = 'pengembangan.php'</script>";	
}

?>  