<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Detail Galleri</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>


<!-- About -->

<div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title"><?= $nama_galleri->nama_gallery?></h2>
						
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
                <?php foreach ($detail_galleri as $key => $value) { ?>
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="<?= base_url('foto/'.$value->foto)?>" width="80%" ></div>
						<div class="about_item_title text-center"><a href="#"><?= $value->ket_foto?></a></div>
						<div class="about_item_text">
                        
						</div>
					</div>
				</div>
                <?php } ?>

				

			</div>
		</div>
	</div>



 