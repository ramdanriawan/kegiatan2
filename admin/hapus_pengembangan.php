<?php
include "../library/koneksi.php";
$no 	= $_GET['no'];

$query = mysql_query("DELETE FROM pengembangan WHERE No=$no");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php?menu=pengembangan'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php?menu=pengembangan'</script>";	
}
?> 