<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login SMK YAYASAN ISLAM TASIKMALAYA</title>

    <!-- Title ICon -->
    <link rel="shortcut Icon" href="<?= base_url('assets/') ?>img/logo2.png">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/bootstrap.min.css" type="text/css">
    <link href="<?= base_url('assets/login/') ?>css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/login/') ?>css/slicknav.min.css" type="text/css">
</head>

<body>



    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <a href="<?= base_url() ?>page/">
                            <figure><img src="<?= base_url('assets/login/') ?>images/1.png" alt="sing up image">
                        </a></figure>

                        <!-- <a href="register.php" class="signup-image-link">Belum Punya Akun?</a> -->
                    </div>

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                            </div>

                            <?= $this->session->flashdata('message'); ?>

                            <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="<?= base_url('assets/login/') ?>vendor/jquery/jquery.min.js"></script>
    <!-- Js Plugins -->
    <script src="<?= base_url('assets/login/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/mixitup.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/login/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>