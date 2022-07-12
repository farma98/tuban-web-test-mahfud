<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Aplikasi Siswa CI3</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo base_url() . 'assets/dist/img/logo-php.png' ?>" rel="stylesheet">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/fonts/custom-font.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/fontawesome-free/css/all.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/adminlte.min.css' ?>">
    <!-- Custom CSS -->
    <style>
        body {
            background-image: url("<?php echo base_url() . 'assets/dist/img/500-error.png' ?>");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-danger">
            <div class="card-header text-center">
                <h3><b>Aplikasi Siswa CI3</b></h3>
                <h5>Mahfud</h5>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
            <div class="card-header">
                <form action="<?php echo base_url() . '/LoginController/auth' ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="username" id="username" autofocus required autocomplete="off">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-check mb-1">
                        <input type="checkbox" class="form-check-input" id="showPassword" name="showPassword" onclick="funcShowPassword()">
                        <label class="form-check-label" for="showPassword">Show Password</label>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-danger btn-block"><strong>Log In</strong></button>
                        </div>
                    </div>
                </form>
                <div class="mt-3 mb-1 login-box-msg">
                    Version 0.1
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
    <!-- Bootstrap 4 -->
    <script src=" <?php echo base_url() . 'assets/plugins/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() . 'assets/dist/js/adminlte.min.js' ?>"></script>
    <!-- Page specific script -->
    <script>
        function funcShowPassword() {
            let x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>