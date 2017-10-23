<?php
include_once("../library/koneksi.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM login";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<a class="btn btn-primary btn-rect" data-toggle="modal" data-target="#myModal"><i class='icon icon-white icon-plus'></i> Tambah User</a><p>
<?php
	if($_POST["user"]){
			include_once("../library/koneksi.php");
			mysql_query("insert into login set username='".$_POST["usr"]."', password='".$_POST["pas"]."', nama='".$_POST["nma"]."', alamat='".$_POST["alt"]."'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=user'>";
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>"; 
	}else if(isset($_POST["user"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}

// code edited
// user(); //memanggil function user
?>
<div class="panel panel-default">
	<div class="panel-heading">
		Daftar User
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Nama Lengkap</th>
						<th>Alamat</th>
						<th width="90">Aksi</th>
					</tr>
				</thead>
			<?php
				$usSql = "SELECT * FROM login ORDER BY kd_user DESC LIMIT $hal, $row";
				$usQry = mysql_query($usSql, $server)  or die("Query kegiatan salah : ".mysql_error());
				$nomor  = 0; 
				while ($us = mysql_fetch_array($usQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><?php echo $us['username'];?></td>
						<td><?php echo $us['nama'];?></td>
						<td><?php echo $us['alamat'];?></td>
						<td>
						  <div class='btn-group'>
						  <a href="?menu=user_del&aksi=hapus&nmr=<?php echo $us['kd_user']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a>
						  <a href="?menu=user_edit&aksi=edit&nmr=<?php echo $us['kd_user']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Edit Data Ini"><i class="icon-edit icon-white"></i></a>
						  </div>
						</td>
					</tr>
				</tbody>
			<?php } ?> 
					<tr>
						<td colspan="6" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=user&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
		</div>
	</div>
</div>

<!-- code added -->

<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Daftar User Baru</h4>
			</div>

			<div class="modal-body">
				<form class="" style="margin: 20px;" action="user.php">
	<!-- 				<div class="form-group">
						<label for="kd_user">Kd_user:</label>
						<input id="kd_user" class="form-control" type="number" name="kd_user" placeholder="biarkan kosong jika ingin automatis" min="1">
					</div> -->
					<div class="form-group">
						<label for="username">Username:</label>
						<input id="username" class="form-control" type="text" name="username" placeholder="user123" minlength="3">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input id="password" class="form-control" type="password" name="password" placeholder="password"  minlength="3">
					</div>
					<div class="form-group">
						<label for="nama">Nama:</label>
						<input id="nama" class="form-control" type="text" name="nama" placeholder="nama"  minlength="3">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat:</label>
						<input id="alamat" class="form-control" type="text" name="alamat" placeholder="alamat"  minlength="3">
					</div>

					<input type="hidden" name="media" value="register">

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<button class="btn btn-primary btn-block " type="submit">
									Register 
									<i class="icon icon-user"></i>
								</button>
							</div>

							<div class="col-md-6">
								<button class="btn btn-block btn-danger" type="reset">
									Reset 
									<i class="icon icon-refresh btn-block"></i>
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

if(strtolower($_GET["media"]) == "register")
{
	$query = $pdo->query("insert into login(username, password, nama, alamat) VALUES('$_GET[username]', '$_GET[password]', '$_GET[nama]', '$_GET[alamat]')");

	if($query)
	{
		echo "<script> alert('user berhasil diregistrasi')</script>";
		header("Location: index.php?menu=user");
	}
	else
	{
		echo "<script> alert('user gagal diregsitrasi')</script>";
		print_r($pdo->errorInfo());
	}
}

?>