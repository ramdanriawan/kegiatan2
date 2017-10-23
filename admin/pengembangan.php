<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * from pengembangan";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>

<!--  edited by rindafrindaa -->


<div class="row">
	<div class="col-md-12">
		<div class="btn-group">
			<button type="button" class="btn btn-primary">
				<a href="?menu=tambah_pengembangan" style="color:white">Entry</a>
				<i class='icon icon-white icon-plus'></i>
			</button>
			<button id="print_data_pengembangan" class="btn btn-info" type="button">
				Print
				<span class="icon icon-print"></span> 
			</button>
		</div>

			
		</form>
	</div>
</div>

<!--  end edited by rindafrindaa -->
<p>
	
<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">Pengembangan</h4>
	</div>
	<div class="panel-body">
		<div id="laporan_data Pengembangan" class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th>No</th>
					<th>Judul Kegiatan Penelitian</th>
					<th>Target Waktu Capaian Output</th>
						<th>Target Capaian Output</th>
						<th>Persentase Target Capaian Output</th>
						<th>Realisasi Capaian Output</th>
						<th>Persentase Realisasi Output</th>
						<th>Tahun</th>
					<th >Aksi</th>
					</tr>
				</thead>
			<?php
				
					$sql = "SELECT * from pengembangan  ORDER BY no DESC LIMIT $hal, $row";
			
				$qry = mysql_query($sql, $server)  or die ("Query kegiatan salah : ".mysql_error());
				$nomor  = 0; 
				while ($data = mysql_fetch_array($qry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $data['jdl_kegiatan'];?></td>
						<td><?php echo $data['target_wkt_capai'];?></td>
						<td><?php echo $data['target_capai'];?></td>
						<td><?php echo $data['pre_target_capai'];?></td>
						<td><?php echo $data['realisasi_capai'];?></td>
						<td><?php echo $data['pre_realisasi'];?></td>
						<td><?php echo $data['tahun'];?></td>
						<td>  
						  <div class='btn-group'>
						  <a href="hapus_penelitian.php" class="btn btn-sm btn-warning">Hapus<i class="fa fa-arrow-circle-right"></i></a>
              			  <a href="edit_penelitian.php" class="btn btn-sm btn-warning">Edit<i class="fa fa-arrow-circle-right"></i></a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="7" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=kas_pengembangan&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div