<!-- Header Content -->
<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="<?= base_url('home') ?>">
									<div class="logo_text">LPKA <span>Kelas II Tomohon</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="<?= base_url('home') ?>">Home</a></li>
									
									<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?= base_url('home/profil') ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Profil
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= base_url('home/sejarah_singkat') ?>">Sejarah Singkat</a>
          <a class="dropdown-item" href="<?= base_url('home/tugas_dan_fungsi') ?>">Tugas dan Fungsi</a>
          <a class="dropdown-item" href="<?= base_url('home/visi_dan_misi') ?>">Visi & Misi</a>
          <a class="dropdown-item" href="<?= base_url('home/struktur_organisasi') ?>">Struktur Organisasi</a>
          <a class="dropdown-item" href="<?= base_url('home/kepala_lpka') ?>">Kepala LPKA</a>
          <a class="dropdown-item" href="<?= base_url('home/pegawai') ?>">Profil Pegawai</a>
        </div>
      </li>
									
		<li><a href="<?= base_url('home/berita') ?>">Berita</a></li>
		<li><a href="<?= base_url('home/galleri') ?>">Galleri</a></li>
		<li><a href="<?= base_url('home/download') ?>">Download</a></li>
		<li><a href="<?= base_url('home/edukpas') ?>">e-Dukasi Pas</a></li>
									
		

	  
								</ul>
								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

    <!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="<?= base_url('home')?>">Beranda</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/profil')?>">Profil</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/berita') ?>">Berita</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/gallery')?>">Gallery</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/download')?>">Download</a></li>
				<li class="menu_mm"><a href="<?= base_url('home/edukpas')?>">e-Dukasi Pas</a></li>
			</ul>
		</nav>
	</div>