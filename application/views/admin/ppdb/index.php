<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Pendaftaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">ppdb</li>
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
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Siswa</th>
                                        <th>NISN</th>
                                        <th>Tempat Tanggal Lahir</th>
                                        <th>Email</th>
                                        <th>Nomer Telp siswa</th>
                                        <th>Asal Sekolah</th>
                                        <th>Nama Ibu</th>
                                        <th>Nama Ayah</th>
                                        <th>Nomer Telp Orang Tua / Wali</th>
                                        <th>Alamat</th>
                                        <th>Jenis kelamin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($siswa as $s) :
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $s['nama_siswa']; ?></td>
                                            <td><?= $s['nisn']; ?></td>
                                            <td><?= $s['tempat_tanggal_lahir']; ?></td>
                                            <td><?= $s['email']; ?></td>
                                            <td><?= $s['no_telp']; ?></td>
                                            <td><?= $s['asal_sekolah']; ?></td>
                                            <td><?= $s['nama_ibu']; ?></td>
                                            <td><?= $s['nama_ayah']; ?></td>
                                            <td><?= $s['no_telp_ortu']; ?></td>
                                            <td><?= $s['alamat']; ?></td>
                                            <td><?= $s['jenis_kelamin']; ?></td>
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