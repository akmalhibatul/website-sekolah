<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Guru</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Guru</li>
                        <li class="breadcrumb-item active">Tambah</li>
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
                        <div class="card-header">
                            <a href="<?= base_url() ?>guru/" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url() ?>guru/create" enctype="multipart/form-data" novalidate>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">NIP Guru :</label>
                                    <input type="text" class="form-control" name="nip">
                                    <small class="form-text text-danger"><?= form_error('nip'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Nama Guru :</label>
                                    <input type="text" class="form-control" name="nama_guru">
                                    <small class="form-text text-danger"><?= form_error('nama_guru'); ?></small>
                                </div>
                                <!-- <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Email :</label>
                                    <input type="text" class="form-control" name="email">
                                    <small class="form-text text-danger"><?= form_error('email'); ?></small>
                                </div> -->
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Alamat Guru :</label>
                                    <textarea class="form-control" name="alamat_guru"></textarea>
                                    <small class="form-text text-danger"><?= form_error('alamat_guru'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Tempat lahir :</label>
                                    <input type="text" class="form-control" name="tempat_lahir">
                                    <small class="form-text text-danger"><?= form_error('tempat_lahir'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Tanggal Lahir :</label>
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                    <small class="form-text text-danger"><?= form_error('tanggal_lahir'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="jenis_kelamin">jenis_kelamin</label>
                                        <select name="jenis_kelamin" class="custom-select">
                                            <?php foreach ($jenis_kelamin as $jk) : ?>
                                                <option value="<?= $jk; ?>"><?= $jk; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="pelajaran">Pelajaran</label>
                                        <select name="pelajaran" class="custom-select">
                                            <?php foreach ($pelajaran as $p) : ?>
                                                <option value="<?= $p['nama_pelajaran']; ?>"><?= $p['nama_pelajaran']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label for="kelas">kelas</label>
                                        <select name="kelas" class="custom-select">
                                            <?php foreach ($kelas as $k) : ?>
                                                <option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">password :</label>
                                    <input type="password" class="form-control" name="password">
                                    <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                </div> -->
                                <!-- <input type="hidden" name="role_id" value="2"> -->
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label>Image :</label><br>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                    <button class="btn btn-danger" type="reset">Reset</button>
                                </div>

                            </form>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>