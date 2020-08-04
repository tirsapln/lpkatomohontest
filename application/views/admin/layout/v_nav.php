<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Home</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-users fa-fw"></i> Data Pegawai<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('pegawai') ?>">Pegawai</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('jabatan') ?>">Jabatan</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('golongan') ?>">Pangkat/Golongan</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                            <a href="<?= base_url('berita') ?>"><i class="fa fa-newspaper-o fa-fw"></i> Berita </a>
                            </li>
                            <li>
                            <a href="<?= base_url('gallery') ?>"><i class="fa fa-image fa-fw"></i> Gallery </a>
                            </li>
                            
                            <li>
                            <a href="<?= base_url('download') ?>"><i class="fa fa-download fa-fw"></i> Download </a>
                            </li>
                            
                            <li>
                                <a href="#"><i class="fa fa-comments-o fa-fw"></i> Layanan Pengaduan Masyarakat<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('pengaduan/wbs') ?>">Whistle Blowing System</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('pengaduan/upg') ?>">Unit Pengaduan Gratifikasi</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('pengaduan/kotakpengaduan') ?>">Kotak Pengaduan</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                            <a href="<?= base_url('informasi') ?>"><i class="fa fa-info-circle fa-fw"></i> Layanan Informasi Pemasyarakatan </a>
                            </li>

                            <li>
                                <a href="#"><i class="fa fa-cog fa-fw"></i> Pengaturan<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('admin/kalapas') ?>">Kepala LPKA</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('admin/profil') ?>">Profil</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('slider') ?>">Slider Foto</a>
                                    </li>

                                
                                    
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            
                            
                            
                            <li class="active">
                                <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="page-header"><?= $title2 ?></h2>
                        
                    