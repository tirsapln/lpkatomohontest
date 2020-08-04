<!-- Home -->

<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
			<?php foreach ($slider as $key => $value) { ?>
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background"  style="background-image:url(<?= base_url('pengaturan/'.$value->foto_slider)?>)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_form_container">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>


			</div>
		</div>

        <!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	



		<!-- Latest News -->

		<div class="news" >
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Tentang LPKA Tomohon</h2>
						<div class="section_subtitle"></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col text-center">
					
					<!-- News Post Large -->
					<?php foreach ($kalapas as $key => $value) { ?>
					<div class="news_post_large_container">
					
						<div class="news_post_large">
							<div class="news_post_image"><img src="<?= base_url('pengaturan/'.$value->foto_kalapas)?>" width="30%" height="30%"></div>
							<div class="news_post_large_title"><a href="<?= base_url('home/kepala_lpka') ?>">Kepala LPKA : <br> <?= $value->nama_kalapas?></a></div>
							<div class="news_post_meta">
								
							</div>
							
						</div>
					</div>
					<?php } ?>
				</div>


				<div class="col-lg-5 news_col">
					<div class="news_posts_small">

					<h3 class="text-center">Visi dan Misi</h3><br>

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



	<div class="col-lg-12 ">
	<!-- Popular Courses -->

	<div class="courses" style="background-image:url(<?= base_url('pengaturan/1.jpg')?>">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url() ?>template/front-end/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Berita Terbaru</h2>
						<div class="section_subtitle"><p>Lembaga Pembinaan Khusus Anak Kelas II Tomohon</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<?php foreach ($berita_home as $key => $value) { ?>
				<div class="col-lg-4 course_col text-center">
					<div class="course">
						<div class="course_image"><img src="<?= base_url('foto_berita/'.$value->foto_berita)?>" height="200px" width="250px"></div>
						<div class="course_body">
							<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita)?>"><?= substr(strip_tags($value->judul_berita),0,25) ?>...</a></h3>
							<div class="course_teacher">Author: <?= $value->nama_user ?></div>
							<div class="course_text">
							<p><?= substr(strip_tags($value->isi_berita),0,100) ?>..</p>
							</div>
						</div>
						
					</div>
				</div>
				<?php } ?>
			</div>

</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Gallery Foto</h2>
						<div class="section_subtitle"><p>Kegiatan dan Aktivitas Lembaga Pembinaan Khusus Anak Kelas II Tomohon</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				

				

				<!-- Event -->
				<?php foreach ($galleri as $key => $value) { ?>
				<div class="col-lg-4 event_col text-center">
					<div class="event event_right">
						<div class="event_image"><img src="<?= base_url('sampul/'.$value->sampul) ?>" width="100%"></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							
							<div class="event_content ">
								<div class="event_title"><a href="<?= base_url('home/detail_galleri/'.$value->id_gallery)?>"><?= $value->nama_gallery?></div>
								<div class="event_info_container">
									<div class="event_text">
									<p class="text-center"> Jumlah : <?= $value->jml_foto ?> Foto</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>




			</div>
		</div>
	</div>

</div>
