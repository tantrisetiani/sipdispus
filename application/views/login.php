<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Login | SISKIP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/kabmadiun.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/css/main.css">
    <!--===============================================================================================-->
</head>

<body style="background-color: #f8fafb;">

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="<?php echo site_url('auth/proses'); ?>">
                    <img class="img-profile mb-2" src="<?= base_url(); ?>assets/img/kabmadiun.png" style="display:block; margin:auto;" width="125px" height="125px" />
                    <h3 class="mb-2 text-center"><strong>LOGIN</strong></h3>
                    <p class="mb-2 text-center">Sistem Penilaian Dinas Perpustakaan dan Kearsipan </br>Kab. Madiun</p>
                    <?php
                    if ($this->session->flashdata('error') != '') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						';
                        echo $this->session->flashdata('error');
                        echo '</div>';
                    }
                    ?>

                    <div class="wrap-input100 validate-input" data-validate="Masukkan username">
                        <input class="input100" type="text" name="username" id="username">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Username</span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate="Masukkan password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" id="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>
                    </div>


                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('assets/img/undraw_remotely_-2-j6y.svg');">
                </div>
            </div>
        </div>
    </div>





    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url(); ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/login/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url(); ?>assets/login/js/main.js"></script>

</body>

</html>