<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>e-Dukasi Pas</li>
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
				<h2>e-Dukasi Pas</h2><br>
				</div>
                <div class="col-lg-6 text-center"> 
                    <h4>Layanan Pengaduan Masyarakat</h4>
                    <a  href="<?= base_url('home/wbs') ?>">Whistle Blowing System (WBS)</a> <br>
                    <a  href="<?= base_url('home/upg') ?>">Unit Pengendali Gratifikasi (UPG)</a> <br>
                    <a  href="<?= base_url('home/pengaduan') ?>">Kontak Pengaduan</a> <br>
                    
                </div> <br>
                <div class="col-lg-6 text-center"> 
                    <h4>Layanan Informasi Pemasyarakatan</h4>
					<?php foreach ($informasi as $key => $value) { ?>
						<a href="<?= base_url('home/detail_layanan/'.$value->slug_layanan)?>"><?= $value->nama_layanan ?></a> <br>
					<?php } ?>

                </div>
					
				</div>
			</div>
		</div>
	</div>