<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Pelajaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Data Pelajaran</li>
                        <li class="breadcrumb-item active">Edit</li>
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
                            <a href="<?= base_url() ?>pelajaran/" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url() ?>pelajaran/update" enctype="multipart/form-data" novalidate>
                                <input type="hidden" name="id" value="<?= $pelajaran['id_pelajaran']; ?>">
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Nama pelajaran :</label>
                                    <input type="text" class="form-control" name="nama_pelajaran" value="<?= $pelajaran['nama_pelajaran']; ?>">
                                    <small class="form-text text-danger"><?= form_error('nama_pelajaran'); ?></small>
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