<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
        <img src="<?php echo base_url() . 'assets/dist/img/logo-php.png' ?>" alt="Logo Tribrata" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Aplikasi Siswa CI3</span>
    </a>
    <div class="sidebar">
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!--Akses Menu Untuk Admin-->
                <?php if ($this->session->userdata('session_access') == 1) : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'Dashboard' ?>" class="nav-link active" id="dashboard">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>
                                Data Master
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo base_url() . 'Siswa' ?>" class="nav-link" id="master-siswa">
                                    <i class="far fa-file-alt nav-icon"></i>
                                    <p>Data Siswa</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url() . 'Siswa/cetakSiswaAdmin' ?>" class="nav-link" id="cetak-master-siswa">
                                    <i class="fa fa-print nav-icon"></i>
                                    <p>Cetak Data Siswa</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Akses Menu Untuk Siswa-->
                <?php else : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'Dashboard' ?>" class="nav-link active" id="dashboard">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url() . 'Siswa/dataSiswa' ?>" class="nav-link" id="siswa">
                            <i class="far fa-file-alt nav-icon"></i>
                            <p>
                                Data Siswa
                            </p>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</aside>