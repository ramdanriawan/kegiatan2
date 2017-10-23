<pre>
<?php 

$pdo = new PDO("mysql:host=localhost;dbname=kegiatan", "root", "");
$query = $pdo->prepare("select target_wkt_capai from penelitian where target_wkt_capai >= '2016-12' and target_wkt_capai <= '2016-13'");
$query2 = $pdo->prepare("select target_wkt_capai from penelitian where target_wkt_capai >='2019-01'");
$query->execute();
$query2->execute();

while($row = $query->fetch(PDO::FETCH_NUM))
{
	$data[] = $row;
}

print_r($data);

$format = '%2017-%02';
echo strftime("2017-02");

?>