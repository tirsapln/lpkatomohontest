
<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li><?= $layanan->nama_layanan ?></li>
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
				<h2><?= $layanan->nama_layanan ?></h2> <br> <br>

				<div class="about_item_image"><img src="<?= base_url('foto_informasi/'.$layanan->foto_layanan)?>" width="70%" ></div>
						
				</div>

                <div class="col-lg-12"> 
				            	<br> <div class="about_item_text">
                            <?= $layanan->desk_layanan?>
                        
						</div>
				</div>
                

                
                

                </div>
					
				</div>
			</div>
		</div>
	</div>