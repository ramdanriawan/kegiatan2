<?php
include "../library/koneksi.php";
$no 	= $_GET['No'];

$query = mysql_query("DELETE FROM kegiatan WHERE No='No'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php'</script>";	
}
?> 