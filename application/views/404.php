<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <title>SMK YAYASAN ISLAM TASIKMALAYA</title>
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title ICon -->
    <link rel="shortcut Icon" href="<?= base_url('assets/') ?>img/logo2.png">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/404/styles.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/styles.css">

    <!-- BS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/bs/css/bootstrap.min.css">

    <!-- Styles -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugin/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugin/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugin/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugin/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugin/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/plugin/slicknav.min.css" type="text/css">

    <!--========== BOX ICONS ==========-->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>


</head>

<body>

    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
        <i class='bx bx-chevron-up scrolltop__icon'></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
        <nav class="nav bd-container">
            <a href="#" class="nav__logo "><img src="<?= base_url('assets/') ?>img/<?= $setting['logo_panjang']; ?>" class="nav__img" alt=""></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="<?= base_url() ?>page/" class="nav__link">Beranda</a></li>
                    <li class="nav__item dropdown">
                        <a class="nav__link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/guru">Profile Guru</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/visi_misi">Visi Dan Misi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/kepala_sekolah">Sambutan Kepala Sekolah</a></li>
                        </ul>
                    </li>

                    <li class="nav__item"><a href="<?= base_url() ?>page/galeri" class="nav__link">Galeri</a></li>
                    <li class="nav__item dropdown">
                        <a class="nav__link link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/pengumuman">Pengumuman Sekolah</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/blocked">Raport Siswa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/ppdb">PPDB</a></li>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="kontak" class="nav__link">kontak</a></li>

                </ul>

            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!-- 404 not found -->
        <section class="page-not-found">
            <img src="<?= base_url('assets/') ?>css/404/404.svg" alt="">
            <!-- Text -->
            <h1>Page Not Found</h1>
            <form action="<?= base_url() ?>page/" method="POST">

                <button class="not-found">Back</button>
            </form>

        </section>
    </main>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="<?= base_url('assets/') ?>js/main2.js"></script>
    <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>

    <!-- Js Plugins -->
    <script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery-ui.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('assets/') ?>js/mixitup.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>

</html>