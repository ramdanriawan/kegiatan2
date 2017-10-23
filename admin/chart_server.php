<?php error_reporting(0);
$bln2 = $_GET["bln2"] + 1;
$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");
$query1 = $pdo->prepare("select target_wkt_capai from penelitian where target_wkt_capai >= '$_GET[thn1]-$_GET[bln1]' && target_wkt_capai <= '$_GET[thn2]-$bln2'");
$query2 = $pdo->prepare("select target_wkt_capai from pengembangan where target_wkt_capai >= '$_GET[thn1]-$_GET[bln1]' && target_wkt_capai <= '$_GET[thn2]-$bln2'");
$query1->execute();
$query2->execute();

while ($row1 = $query1->fetch(PDO::FETCH_OBJ)) {
	$data1[] = $row1;
}
sort($data1);
$data_asli["penelitian"] = $data1;

while ($row2 = $query2->fetch(PDO::FETCH_OBJ)) {
	$data2[] = $row2;
}
sort($data2);
$data_asli["pengembangan"] = $data2;

foreach($data_asli["penelitian"] as $key => $value)
{
	$target_wkt_capai_array_penelitian[] = substr($value->target_wkt_capai, 0, 7);
}
foreach($data_asli["pengembangan"] as $key => $value)
{
	$target_wkt_capai_array_pengembangan[] = substr($value->target_wkt_capai, 0, 7);
}

// print_r($target_wkt_capai_array_pengembangan);
// print_r($target_wkt_capai_array_penelitian);

foreach (array_unique($target_wkt_capai_array_penelitian) as $value) {
	$query3 = $pdo->prepare("select target_wkt_capai from penelitian where target_wkt_capai like '%$value%'");
	$query3->execute();
	$data_penelitian["waktu"] = $value;
	$data_penelitian["jumlah"] = $query3->rowCount();
	$data_asli2["penelitian"][] = $data_penelitian;
}

foreach (array_unique($target_wkt_capai_array_pengembangan) as $value) {
	$query4 = $pdo->prepare("select target_wkt_capai from pengembangan where target_wkt_capai like '%$value%'");
	$query4->execute();
	$data_penelitian["waktu"] = $value;
	$data_penelitian["jumlah"] = $query4->rowCount();
	$data_asli2["pengembangan"][] = $data_penelitian;
}

$data_asli2 = json_encode($data_asli2);

if($data_asli2 == null)
{
	die("null");
}else {
	echo $data_asli2;
}

?>