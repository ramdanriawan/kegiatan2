<?php
	$server = mysql_connect("localhost","root","");
	$db = mysql_select_db("kegiatan");
	
	if(!$server){
		echo "Maaf, Gagal tersambung dengan server !";
	}
	if(!$db){
		echo "Maaf, Gagal tersambung dengan database !";
	}
	
	$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");
?>