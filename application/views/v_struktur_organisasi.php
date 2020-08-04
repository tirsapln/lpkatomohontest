<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Struktur Organisasi</li>
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
				<h2>Struktur Organisasi</h2><br>
				</div>

                <?php foreach ($profil as $key => $value) { ?>
					<div class="about_item_image"><img src="<?= base_url('pengaturan/struktur/'.$value->struktur_organisasi)?>" width="100%" ></div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>