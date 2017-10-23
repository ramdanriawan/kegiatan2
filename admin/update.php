<?php
include "../koneksi.php";

$No            					= $_POST['no'];
$judul_kegiatan					= $_POST['jdl_kegiatan'];
$target_waktu_capai				= $_POST['target_wkt_capai'];
$target_capai 	    			= $_POST['target_capai'];
$presentase_target_capai 	    = $_POST['pre_target_capai'];
$realisasi_capai	        	= $_POST['realisasi_capai'];
$presentase_realisasi	        = $_POST['pre_realisasi'];
$tahun					        = $_POST['tahun'];

$query = mysql_query("UPDATE kegiatan SET no='$no',no='$no', judul_kegiatan='$jdl_kegiatan', target_waktu_capai='$target_wkt_capai', target_capai='$target_capai', presentase_target_capai='$pre_target_capai', realisasi_capai='$realisasi_capai', presentase_realisasi='$presentase_realisasi',
 WHERE no='$no'");
if ($query){
header('location:index.php');}	
    //echo "<script>alert('Data Kegiatan Berhasil diubah!'); window.location = 'index.php'</script>";	
//} else {
	//echo "<script>alert('Data Kegiatan Gagal diubah!'); window.location = 'edit.php?hal=edit&kd=$no</script>";
    //}
?>