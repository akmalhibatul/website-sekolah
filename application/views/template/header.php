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
    <style>
        .visi__container li {
            text-align: left;
        }

        .visi__data p {
            text-align: left;
        }

        .kepala__data p {
            text-align: left;
        }

        .visi__data {
            text-align: left;
        }

        .kepala__description {
            text-align: left;
        }
    </style>

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
                    <li class="nav__item"><a href="<?= base_url() ?>page/index" class="nav__link <?php if ($this->uri->segment(2) == "index") {
                                                                                                        echo "active-link";
                                                                                                    } ?>">Beranda</a></li>
                    <li class="nav__item dropdown">
                        <a class="nav__link <?php if ($this->uri->segment(2) == "guru") {
                                                echo "active-link";
                                            } elseif ($this->uri->segment(2) == "visi_misi") {
                                                echo "active-link";
                                            } elseif ($this->uri->segment(2) == "kepala_sekolah") {
                                                echo "active-link";
                                            } ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

                    <li class="nav__item"><a href="<?= base_url() ?>page/galeri" class="nav__link <?php if ($this->uri->segment(2) == "galeri") {
                                                                                                        echo "active-link";
                                                                                                    } ?>">Galeri</a></li>
                    <li class="nav__item dropdown">
                        <a class="nav__link <?php if ($this->uri->segment(2) == "pengumuman") {
                                                echo "active-link";
                                            } elseif ($this->uri->segment(2) == "auth") {
                                                echo "active-link";
                                            } elseif ($this->uri->segment(2) == "ppdb") {
                                                echo "active-link";
                                            } ?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/pengumuman">Pengumuman Sekolah</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/blocked">Raport Siswa</a></li>
                            <li><a class="dropdown-item" href="<?= base_url() ?>page/ppdb">PPDB</a></li>
                        </ul>
                    </li>
                    <li class="nav__item"><a href="<?= base_url() ?>page/kontak" class="nav__link <?php if ($this->uri->segment(2) == "kontak") {
                                                                                                        echo "active-link";
                                                                                                    } ?>">kontak</a></li>

                </ul>

            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>