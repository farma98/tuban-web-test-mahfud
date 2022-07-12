<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404-Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/fonts/custom-font.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/adminlte.min.css' ?>">
</head>

<body>
    <div class="container" style="height:100vh;">
        <div class="row">
            <div class="col-md-12">
                <section class="content-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>404 Error Page</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">

                                </li>
                                <li class="breadcrumb-item active">404 Error Page</li>
                            </ol>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="error-page">
                        <h2 class="headline text-danger"> 404</h2>
                        <div class="error-content">
                            <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Halaman Tidak Ditemukan.
                            </h3>
                            <p>

                            </p>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="error-page">
                        <img src="<?php echo base_url() . 'assets/dist/img/404-error.png' ?>" width="320" height="320">
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>