<?php session_start(); error_reporting(0);
include "../library/koneksi.php";
include "fungsi.php";
include_once("tglindo.php");
?>
<?php 
// code added by rindafrindaa 

$query = $pdo->prepare("select * from pengembangan where target_wkt_capai like '%$_POST[hari_mulai]%'");
$query->execute();

if($query->rowCount() < 1)
{
    die("Data yang diminta tidak ditemukan"); 
}

    if(isset($_POST["media"]))
    {
        
        while($row = $query->fetch(PDO::FETCH_OBJ))
        {
            $data_hari[] = $row;
        }
        
        $tanggal = TanggalIndo($_POST["hari_mulai"]);
        
echo <<<EOD
<table width="100%">
    <tr>
        <td>
            <div align="center">
                <h2 align="center" class="style1">Laporan Pengembanga P3HH </h2>
            </div>
        </td>
    </tr>
</table>

<form name="sda" role="form" method="POST">
    <div class="panel-body">
        <div class="col-lg-12">
            <div class="row">
                <CenteR>
                    Laporan Pengembangan :  $tanggal
                </center>
                <br>
                
                <div class="dataTable_wrapper">
                    <table width="100%" border="1" class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th bgcolor="#CCCCCC">No</th>
                                <th bgcolor="#CCCCCC">Judul Kegiatan Pengembangan</th>
                                <th bgcolor="#CCCCCC">Target Waktu Capaian Output</th>
                                <th bgcolor="#CCCCCC">Target Capai</th>
                                <th bgcolor="#CCCCCC">Persentase Target Capaian Output</th>
                                <th bgcolor="#CCCCCC">Realisasi Capaian Output</th>
                                <th bgcolor="#CCCCCC">Persentase Realisasi Capaian Output</th>
                                <th bgcolor="#CCCCCC">Tahun</th>
                            </tr>
                        </thead>

                        <tbody>
EOD;

$total = 0;
$tgl = date("Y-M-d");
foreach ($data_hari as $key => $value){
                        $no      = $key+1;
                        
                        echo "
                            <tr>
                                <td>$value->No</td>
                                <td>$value->jdl_kegiatan</td>
                                <td>$value->target_wkt_capai</td>
                                <td>$value->target_capai</td>
                                <td>$value->pre_target_capai</td>
                                <td>$value->realisasi_capai</td>
                                <td>$value->pre_realisasi</td>
                                <td>$value->tahun</td>
                            </tr>
                        ";
}                       
                        echo "
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class='col-lg-12 col-md-4' align='right'>
        Bogor, $tgl 
        <br/><br/><br/><br/>
        Pimpinan
        $_SESSION[namalengkap]
    </div>
</form>
";
}
// code ended 

// 
// $tgl=date('Y-m-d');
// $tglorder=$_POST['tanggal'];
// $sql=mysql_query("select * from penelitian
// where tgl like '$_POST[tanggal]%' and jenis='masuk' order by kode asc") or die
// (mysql_error());
?>

<body onload="javascript:print()"></body>