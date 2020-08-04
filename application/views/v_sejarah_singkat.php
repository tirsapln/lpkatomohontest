<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>"Sejarah Singkat"</li>
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
				<h2>Sejarah Singkat</h2><br>
				</div>

                <?php foreach ($profil as $key => $value) { ?>
					<div class="col-lg-12"> 
                    <p><?= $value->sejarah_singkat?></p>
					</div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>