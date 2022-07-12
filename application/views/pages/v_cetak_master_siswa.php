<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Siswa CI3</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/dist/img/logo-php.png' ?>" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/fonts/custom-font.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/adminlte.min.css' ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
    <div class="wrapper">
        <!--Include Header-->
        <?php $this->load->view('layouts/header'); ?>
        <!--Include Sidebar-->
        <?php $this->load->view('layouts/sidebar'); ?>
        <div class="content-wrapper" style="height: auto">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">Cetak Data Siswa</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class=" container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-file-alt mr-1"></i>
                                        Aplikasi Siswa CI3
                                    </h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-warning btn-sm" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row mr-2 ml-2">
                                        <div class="col-lg-2 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h5>CETAK EXCEL</h5>
                                                    <p>Data Siswa</p>
                                                </div>
                                                <a href="<?php echo base_url() . 'ExcelSiswa/export' ?>" class="nav-link">
                                                    <div class="icon">
                                                        <i class="ion ion-archive"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h5>CETAK PDF</h3>
                                                        <p>Data Siswa</p>
                                                </div>
                                                <a href="<?php echo base_url() . 'Pdfview/index' ?>" class="nav-link">
                                                    <div class="icon">
                                                        <i class="ion ion-archive"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--Include Footer-->
        <?php $this->load->view('layouts/footer'); ?>
    </div>
</body>

<!-- jQuery -->
<script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/adminlte.js' ?>"></script>