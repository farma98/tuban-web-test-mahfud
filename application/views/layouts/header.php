<!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo base_url() . 'assets/dist/img/logo-tribrata.png' ?>" alt="Logo Siharwat Bbm" height="80" width="80">
</div> -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light bg-warning">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-lg"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-user-secret fa-lg"></i> <span>
                    <strong><?php echo $this->session->userdata('session_name'); ?></strong>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <button type="submit" class="dropdown-item">
                    <i class="fas fa-sign-out-alt"></i> <a href="<?php echo base_url() . 'LoginController/logout' ?>">Logout</a>
                </button>
            </div>
        </li>
    </ul>
</nav>