<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Tugas dan Fungsi</li>
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
				<h2>Tugas dan Fungsi</h2><br>
				</div>

                <?php foreach ($profil as $key => $value) { ?>
					<div class="col-lg-12"> 
                    <h4>Tugas : </h4>
                    <p><?= $value->tugas_lpka?></p><br>
                    <h4>Fungsi : </h4>
                    <p><?= $value->fungsi_lpka?></p>
					</div>
                <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>