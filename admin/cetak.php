<?php session_start(); error_reporting(0);

include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php
$tgl=date('Y-m-d');
$thn1=$_GET['thn1'];
$bln1=$_GET['bln1'];
$tgl1=$_GET['tgl1'];
$thn2=$_GET['thn2'];
$bln2=$_GET['bln2'];
$bln22=$_GET['bln2'] + 1;
$tgl2=$_GET['tgl2'];

?> 
<?php

$ambildata=$pdo->prepare("SELECT * from penelitian WHERE target_wkt_capai >= '$thn1-$bln1' AND target_wkt_capai <= '$thn2-$bln22'");
$ambildata->execute();
// $cekdata=mysql_num_rows($ambildata);
// if($cekdata=='0'){
// echo "Maaf Data Yang anda cari tidak ada";
// }
$cekdata=$ambildata->rowCount();
if($cekdata=='0'){
    die("Maaf Data Yang anda cari tidak ada");
}
?>
    
<body onLoad="">   
<h3 align="center" class="style1">Laporan Monitoring Capaian Output Penelitian dan Pengembangan</h3>

<div align="center">DARI BULAN  <?php echo "$bln1-$thn1" ?> SAMPAI DENGAN BULAN  <?php echo"$bln2-$thn2";?></div>
<table class="table table-striped table-responsive table-bordered table-condensed"width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#33CCFF">
<tr>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>No</strong></td>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Judul Kegiatan</strong></td>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Target Waktu Capaian Output</strong></td>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Target Capaian Output</strong></td>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Persentase Target Capaian Output</strong></td>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Realisasi Capaian Output</strong></td> 
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Persentase Realisasi Capaian Output</strong></td>
<td align="center" valign="middle" bgcolor="#71DCFF"><strong>Tahun</strong></td>
</tr>

<?PHP

function convert_bulan($bulan)
{
    switch ((int) $bulan) {
        case 1:
            $bulan = "January";
        break;
        case 2:
            $bulan = "February";
        break;
        case 3:
            $bulan = "Maret";
        break;
        case 4:
            $bulan = "April";
        break;
        case 5:
            $bulan = "Mei";
        break;
        case 6:
            $bulan = "Juni";
        break;
        case 7:
            $bulan = "Juli";
        break;
        case 8:
            $bulan = "Agustus";
        break;
        case 9:
            $bulan = "September";
        break;
        case 10:
            $bulan = "Oktober";
        break;
        case 11:
            $bulan = "November";
        break;
        case 12:
            $bulan = "Desember";
        break;
        
        default:
            $bulan = "Bulan tidak terdaftar";
        break;
    }
    return $bulan;
}

while($cetakdata=$ambildata->fetch(PDO::FETCH_ASSOC)):?>
<tr>
    
    <?php 
        $thn_awal  = (int) substr($cetakdata["target_wkt_capai"], 0, 4);
        $thn_akhir = (int) substr($cetakdata["target_wkt_capai"], -7, 4);
        $bln_awal  = (int) substr($cetakdata["target_wkt_capai"], 5, 2);
        $bln_akhir = (int) substr($cetakdata["target_wkt_capai"], -2, 2);
        
        $data_target_wkt_capai_bulan_awal = convert_bulan($bln_awal);
        $data_target_wkt_capai_bulan_akhir = convert_bulan($bln_akhir);
        
        $data_target_wkt_capai_asli = "{$thn_awal}-{$data_target_wkt_capai_bulan_awal} s/d {$thn_akhir}-{$data_target_wkt_capai_bulan_akhir}";
        
    ?>
    
<td bgcolor="#FFFFFF"><?php echo $cetakdata["No"]?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["jdl_kegiatan"]?></td>
<td bgcolor="#FFFFFF"><?php echo $data_target_wkt_capai_asli?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["target_capai"]?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["pre_target_capai"]?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["realisasi_capai"]?></td>
<td bgcolor="#FFFFFF"><?php echo $cetakdata["pre_realisasi"]?></td>
<td bgcolor="#FFFFFF"><?php echo TanggalIndo($cetakdata['tahun'])?></td>
</tr>
<?php endwhile; ?>
</table>


							  <div class="col-lg-12 col-md-4" align="right">
								Bogor,<?php echo TanggalIndo($tgl); ?> <br/><br/><br/><br/>
								Pimpinan
								<?php echo $_SESSION['nama_user']; ?>
							  </div>