       <div id="left">
            <ul id="menu" class="collapse">
                <li class="panel active"><a href="index.php"><i class="icon-home"></i>Home</a></li>
                <li><a href="?menu=penelitian"><i class="icon-paper-clip"> </i>Penelitian</a></li>
                <li><a href="?menu=pengembangan"><i class="icon-paper-clip"></i>Pengembangan</a></li>
                <li><a href="?menu=laporandatapenelitian"><i class="icon-paper-clip"></i>Laporan Data Penelitian</a></li>
              	<li><a href="?menu=laporandatapengembangan"><i class="icon-paper-clip"></i>Laporan Data Pengembangan</a></li>
              	<li><a href="?menu=monitoringcapaianoutputpeneliti_pengembangan"><i class="icon-paper-clip"></i>Monitoring Capaian Output Penelitian dan Pengembangan</a></li>
              
                <li><a href="?menu=user"><i class="icon-user "></i> Daftar User</a></li>
            </ul>
        </div>
		
		
		<div id="content">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">
						<h1>Pelaporan Monitoring Kinerja Kegiatan</h1>
                    </div>
                </div>
                <hr/>
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
						<?php
						if($_GET["menu"]){
							include_once("load.php");
						}else{
							echo "<div class='col-lg-12'>
										<div class='panel panel-default'>
											<div class='panel-heading'>
												Tentang Aplikasi
											</div>
											<div class='panel-body'>
												<ul class='nav nav-tabs'>
													<li class='active'><a href='#home' data-toggle='tab'>Home</a>
													</li>
													
												</ul>

												<div class='tab-content'>
													<div class='tab-pane fade in active' id='home'>
													<h4>Pelaporan Monitoring Kinerja Kegiatan</h4>
													</div>
													
												</div>
											</div>
										</div>
									</div>";
						}
						?>
					</div>
                </div>
                  <!--END BLOCK SECTION -->
                <hr />
            </div>
        </div>