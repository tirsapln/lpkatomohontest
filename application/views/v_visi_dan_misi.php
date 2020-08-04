<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Visi dan Misi</li>
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
				<h2>Visi dan Misi</h2><br>
				</div>

                <?php foreach ($profil as $key => $value) { ?>
					<div class="col-lg-12"> 
                    <h4>Visi : </h4>
                    <p><?= $value->visi?></p><br>
                    <h4>Misi : </h4>
                    <p><?= $value->misi?></p>
					</div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>