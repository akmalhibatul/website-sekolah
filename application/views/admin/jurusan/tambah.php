<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Jurusan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">jurusan</li>
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
                            <a href="<?= base_url() ?>jurusan/" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url() ?>jurusan/create" enctype="multipart/form-data" novalidate>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Nama Jurusan :</label>
                                    <input type="text" class="form-control" name="nama_jurusan">
                                    <small class="form-text text-danger"><?= form_error('nama_jurusan'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label>Image :</label><br>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Keterangan :</label>
                                    <textarea class="ckeditor" id="ckedtor" name="ket"></textarea>
                                    <small class="form-text text-danger"><?= form_error('ket'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label>Image Detail :</label><br>
                                        <input type="file" name="image_detail" id="image">
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