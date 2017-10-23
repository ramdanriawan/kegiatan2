
<div class="box">

	<header>
		<h5>Input Data Pengembangan</h5>
	</header>
		<div class="body">
			<form action="insert.php?menu=tambah_pengembangan" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">No</label>
							<div class="col-lg-4">
								<input type="text" name="No" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Judul Kegiatan Pengembangan</label>
							<div class="col-lg-4">
								<input type="text" name="jdl_kegiatan" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Target Waktu Capaian Output</label>
							<div class="col-lg-4">
								<input id="target_wkt_capai" type="text" name="target_wkt_capai" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Target Capaian Output</label>
							<div class="col-lg-4">
								<input id="target_capai" type="text" name="target_capai" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Persentase Target Capaian Output</label>
							<div class="col-lg-4">
								<input type="varchar" name="pre_target_capai" autofocus required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Realisasi Capaian Output</label>
							<div class="col-lg-2">
								<input type="text" class="form-control" name="realisasi_capai"  />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Persentase Realisasi Capaian Output</label>
							<div class="col-lg-4">
								<input type="varchar" required name="pre_realisasi" class="form-control" />
							</div>
						</div>
						<div class="form-group">
      					</select>
							<label for="id_tahun">Tahun</label></td>
        					<td><select name="id_tahun" id="id_tahun" class="form-control" required/>>
         					<option>--Pilih Salah Satu--</option>
          					<option ="2013">2013</option>
          					<option ="2014">2014</option>
          					<option ="2015">2015</option>
          					<option ="2016">2016</option>
          					<option ="2017">2017</option>
          					<option ="2018">2018</option>
          					<option ="2019">2019</option>
          					<option ="2020">2020</option>
        				</select>
						</div>
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="submit" value="Simpan" class="btn btn-primary" /> <a href="?menu=pengembangan" class="btn btn-warning">Back</a>
						
						</div>

					</form>
	</div>
</div> 

