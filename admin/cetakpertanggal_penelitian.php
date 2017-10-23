<?php
include "../library/koneksi.php";
error_reporting(E_ALL);
ob_start();
?>
<h2 align="center">Laporan Penelitian</h2>
<table border="1px solid">
	<thead>
		<tr style="text-align:center;">
			<th>No</th>
			<th style="width: 200px;">Judul <br><small>Kegiatan Penelitian</small></th>
			<th style="width: 150px;">Target <br><small>Waktu Capaian Output</small></th>
			<th style="width: 150px;">Target <br><small>Capaian Output</small></th>
			<th style="width: 100px;">Persentase <br><small>Target Capaian Output</small></th>
			<th style="width: 120px;">Realisasi <br><small>Capaian Output</small></th>
			<th style="width: 120px;">Persentase <br><small>Realisasi Output</small></th>
			<th style="width: 80px;">tahun</th>
		</tr>
	</thead>
	
	<tbody>
<?php
	
	$sql = "SELECT * from penelitian ";
	$qry = mysql_query($sql, $server)  or die ("Query kegiatan salah : ".mysql_error());
	$nomor  = 0; 
	while ($data = mysql_fetch_array($qry)) {
	$nomor++;
	$tanggal = explode(" _ ", $data['target_wkt_capai']);
?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $data['jdl_kegiatan'];?></td>
			<td><?php echo bulan($tanggal[0]). " - " . bulan($tanggal[1]);?></td>
			<td><?php echo $data['target_capai'];?></td>
			<td><?php echo $data['pre_target_capai'];?></td>
			<td><?php echo $data['realisasi_capai'];?></td>
			<td><?php echo $data['pre_realisasi'];?></td>
			<td><?php echo $data['tahun'];?></td>

		</tr>
<?php } ?>
		</tbody>
</table>

<?php
$html = ob_get_clean();
$html = "<page backtop='7mm' backbottom='7mm' backleft='10mm' backright='10mm' style='font-family: freeserif;'>".$html."</page>";
ob_end_clean();

require '../html2pdf/html2pdf.class.php';
$pdf = new HTML2PDF('L','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Penelitian.pdf');
?>


<?php
function bulan($tgl){	
	$tanggal = explode("-", $tgl);
	$bulan = $tanggal[count($tanggal)-1];
	
	switch($bulan){
		case "1": $hasil="Januari";break;
		case "2": $hasil="Februari";break;
		case "3": $hasil="Maret";break;
		case "4": $hasil="April";break;
		case "5": $hasil="Mei";break;
		case "6": $hasil="Juni";break;
		case "7": $hasil="Juli";break;
		case "8": $hasil="Agustus";break;
		case "9": $hasil="September";break;
		case "10": $hasil="Oktober";break;
		case "11": $hasil="November";break;
		case "12": $hasil="Desember";break;
	}
	return $hasil;
}
?>