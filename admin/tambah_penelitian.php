
<div class="box">

	<header>
		<h5>Input Data Penelitian</h5>
	</header>
		<div class="body">
			<form action="insert.php" method="get" class="form-horizontal">			
				<div class="form-group">
					<label class="control-label col-lg-4">Judul Kegiatan Penelitian</label>
					<div class="col-lg-4">
						<input type="text" name="jdl_kegiatan" autofocus required class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-lg-4">Target Waktu Capaian Output</label>
					<div class="col-lg-4">
						<input type="month" name="target_wkt_capai1" autofocus required class="form-control" style="width:150px;float:left;"/>
						<span class="btn btn-default pull-left" style="margin: 0px 5px;"> Sampai </span>
						<input type="month" name="target_wkt_capai2" autofocus required class="form-control" style="width:150px;float:left;"/>
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
					<label for="id_tahun" class="control-label col-lg-4">Tahun</label></td>
					<div class="col-lg-4">
						<select name="id_tahun" id="id_tahun" required style="width: 100%;padding: 5px 0px;">
							<option>--Pilih Salah Satu--</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							<option value="2015">2015</option>
							<option value="2016">2016</option>
							<option value="2017">2017</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
						</select>
					</div>
				</div>
				
				<input type="hidden" name="insert_to" value="penelitian">
				
				
				<div class="form-actions no-margin-bottom" style="text-align:center;">
					<input type="submit" name="submit" value="Simpan" class="btn btn-primary" /> 
					<a href="?menu=penelitian" class="btn btn-warning">Back</a>				
				</div>

			<div class="text-right">
		  <a href="#"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
			</form>
	</div>
</div> 

