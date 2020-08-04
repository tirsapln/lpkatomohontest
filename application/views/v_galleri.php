<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Galleri</li>
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
						<h2 class="section_title">Galleri Foto</h2>
						
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
                <?php foreach ($galleri as $key => $value) { ?>
				<div class="col-lg-4 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><img src="<?= base_url('sampul/'.$value->sampul)?>" width="350px" height="200"></div>
						<div class="about_item_title text-center"><a href="<?= base_url('home/detail_galleri/'.$value->id_gallery)?>"><?= $value->nama_gallery?></a></div>
						<div class="about_item_text">
                        <p class="text-center"> Jumlah : <?= $value->jml_foto ?> Foto</p>
						</div>
					</div>
				</div>
                <?php } ?>

				

			</div>
		</div>
	</div>



 