<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin| Dashboard</title>
    <link rel="shortcut Icon" href="<?= base_url('assets/') ?>img/logo2.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>dist/css/adminlte.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/') ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        .imgtable {
            border-radius: 50%;
            width: 100px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item">
                    <img src="<?= base_url('assets/') ?>img/logo3.png" style="float: right;" width="65%">
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>admin/" class="brand-link">
                <img src="<?= base_url('assets/') ?>img/logo2.png" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">ADMIN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/" class="nav-link <?php if ($this->uri->segment(1) == "admin") {
                                                                                    echo "active";
                                                                                } ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Dasboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-<?php if ($this->uri->segment(1) == "guru") {
                                                        echo "open";
                                                    } elseif ($this->uri->segment(1) == "kelas") {
                                                        echo "open";
                                                    } elseif ($this->uri->segment(1) == "pelajaran") {
                                                        echo "open";
                                                    }
                                                    ?>">

                            <a href="#" class="nav-link <?php if ($this->uri->segment(1) == "guru") {
                                                            echo "active";
                                                        } elseif ($this->uri->segment(1) == "kelas") {
                                                            echo "active";
                                                        } elseif ($this->uri->segment(1) == "pelajaran") {
                                                            echo "active";
                                                        }
                                                        ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Master Data
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>guru" class="nav-link <?php if ($this->uri->segment(1) == "guru") {
                                                                                        echo "active";
                                                                                    } ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>pelajaran/" class="nav-link <?php if ($this->uri->segment(1) == "pelajaran") {
                                                                                                echo "active";
                                                                                            } ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Pelajaran</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>kelas/" class="nav-link <?php if ($this->uri->segment(1) == "kelas") {
                                                                                            echo "active";
                                                                                        } ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Kelas</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-<?php if ($this->uri->segment(1) == "jurusan") {
                                                        echo "open";
                                                    } elseif ($this->uri->segment(1) == "galeri") {
                                                        echo "open";
                                                    } elseif ($this->uri->segment(1) == "berita") {
                                                        echo "open";
                                                    }
                                                    ?>">

                            <a href="#" class="nav-link <?php if ($this->uri->segment(1) == "jurusan") {
                                                            echo "active";
                                                        } elseif ($this->uri->segment(1) == "galeri") {
                                                            echo "active";
                                                        } elseif ($this->uri->segment(1) == "berita") {
                                                            echo "active";
                                                        }
                                                        ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Menu Setting
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>jurusan" class="nav-link <?php if ($this->uri->segment(1) == "jurusan") {
                                                                                            echo "active";
                                                                                        } ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Menu Jurusan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>galeri/" class="nav-link <?php if ($this->uri->segment(1) == "galeri") {
                                                                                            echo "active";
                                                                                        } ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Menu Galeri</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= base_url() ?>berita/" class="nav-link <?php if ($this->uri->segment(1) == "berita") {
                                                                                            echo "active";
                                                                                        } ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Menu Berita</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>ppdb/" class="nav-link <?php if ($this->uri->segment(1) == "ppdb") {
                                                                                    echo "active";
                                                                                } ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    PPDB
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>setting/index/1" class="nav-link <?php if ($this->uri->segment(1) == "setting") {
                                                                                            echo "active";
                                                                                        } ?>">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Setting
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>auth/logout" class="nav-link">
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>