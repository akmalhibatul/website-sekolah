<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Guru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Data Guru</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-12 col-12">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url() ?>guru/tambah" class="btn btn-primary">Tambah Guru</a>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NIP</th>
                                        <th>Foto Guru</th>
                                        <th>Nama Guru</th>
                                        <th>Alamat Guru</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tangal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Kelas</th>
                                        <th>Pelajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($guru as $g) :
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><img src="<?= base_url('assets/') ?>img/guru/<?= $g['image']; ?>" class="imgtable"></td>
                                            <td><?= $g['nip']; ?></td>
                                            <td><?= $g['nama_guru']; ?></td>
                                            <td><?= $g['alamat_guru']; ?></td>
                                            <td><?= $g['tempat_lahir']; ?></td>
                                            <td><?= $g['tanggal_lahir']; ?></td>
                                            <td><?= $g['jenis_kelamin']; ?></td>
                                            <td><?= $g['kelas']; ?></td>
                                            <td><?= $g['pelajaran']; ?></td>
                                            <td>
                                                <a href="<?= base_url() ?>guru/edit/<?= $g['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                <a href="<?= base_url() ?>guru/hapus/<?= $g['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus Data?')"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>