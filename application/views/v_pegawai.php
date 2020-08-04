<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Pegawai</li>
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
				<h2> Pegawai LPKA </h2>
				</div><br><br>
				<div class="col-lg-12 text-center"> 
				
				</div><br><br>
                <!-- Pegawai -->
                <?php foreach ($pegawai as $key => $value) { ?>
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="<?= base_url('foto_pegawai/'.$value->foto_pegawai)?>" alt=""></div>
						<div class="team_body">
							<div class="team_title"><h5><?= $value->nama_pegawai ?></h5></div>
							<div class="team_subtitle"><?= $value->nip?></div>
                            <div class="team_subtitle"><?= $value->nama_jabatan?></div>
                            <div class="team_subtitle"><?= $value->tempat_lahir?>, <?= $value->tanggal_lahir?> </div>
				
						</div>
					</div>
				</div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>

    
	