<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Kepala LPKA</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

    <div class="contact">
		
		

		<div class="contact_info_container">
			<div class="container">
				<div class="row">
					
				<div class="col-lg-12 text-center"> 
				<h2>Kepala LPKA</h2><br>
				</div>

                <?php foreach ($kalapas as $key => $value) { ?>
					<div class="col-lg-12 text-center"> 
                    <div class="about_item_image"><img src="<?= base_url('pengaturan/'.$value->foto_kalapas)?>" width="15%" height="15%"></div>
                    <br>
					</div>
					<div class="col-lg-12 text-center "> 
                    <h4>Nama Lengkap: </h4>
                    <p><?= $value->nama_kalapas?></p>
                    <h4>Nip :  </h4>
                    <p><?= $value->nip_kalapas?></p>
                    <h4>Pangkat/Golongan :  </h4>
                    <p><?= $value->pangkat?></p>
                    <h4>Tempat & Tanggal Lahir  </h4>
                    <p><?= $value->ttl_kalapas?></p>
                    <h4>Agama :  </h4>
                    <p><?= $value->agama?></p>
                    <h4>Pendidikan :  </h4>
                    <p><?= $value->pendidikan?></p>
                    <h4>Riwayat Pekerjaan:  </h4>
                    <p><?= $value->riwayat_pekerjaan?></p>
                    
					</div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>