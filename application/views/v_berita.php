<!-- Home -->

<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li>Berita</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>



<!-- Courses -->

<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						<h2> Berita </h>
					</div>
					<div class="courses_container">
						<div class="row courses_row">
							
							<!-- Course -->
                            <?php foreach ($berita as $key => $value) { ?>
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class=""><img src="<?= base_url('foto_berita/'.$value->foto_berita) ?>" height="170px" width="100%"></div>
									<div class="course_body">
										<h3 class="course_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita)?>"><?= substr(strip_tags($value->judul_berita),0,25) ?>...</a></h3>
										<div class="course_teacher">Author: <?= $value->nama_user ?></div>
										<div class="course_text">
											<p><?= substr(strip_tags($value->isi_berita),0,100) ?>..</p>
										</div>
									</div>
									<div class="course_footer">
										<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
											<div class="course_info">
												<i class="fa fa-calender" aria-hidden="true"></i>
												<span><?= $value->tanggal_berita ?></span>
											</div>
											
											
										</div>
									</div>
								</div>
							</div>
                            <?php } ?>

							
						</div>
						<div class="row pagination_row">
							<div class="col">
								    <?php 
                                        if (isset($paginasi))
                                        {
                                            echo $paginasi;
                                        }
                                    
                                    ?>
									
								
							</div>
						</div>
					</div>
				</div>

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Berita Terbaru</div>
							<div class="sidebar_latest">

								<!-- Latest Course -->
                                <?php foreach ($berita_terbaru as $key => $value) { ?>
								<div class="latest d-flex flex-row align-items-start justify-content-start">
                                    
									<div class="latest_image"><div><img src="<?= base_url('foto_berita/'.$value->foto_berita)?>" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="<?= base_url('home/detail_berita/'.$value->slug_berita)?>"><?= $value->judul_berita ?></a></div>
										<div class="latest_price"><?= $value->tanggal_berita?></div>
									</div>
								</div>
                                <?php } ?>
								

							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
	</div>