<?php
include "../library/koneksi.php";
$No 	= $_GET['no'];

$query = mysql_query("DELETE FROM penelitian WHERE No='$No'");
if ($query){ 
	echo "<script>alert('Hapus berhasil!'); document.location = '?menu=penelitian'</script>";	
} else {
	echo "<script>alert('Hapus gagal !'); document.location = '?menu=penelitian'</script>";	
}
?> 