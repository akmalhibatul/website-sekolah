<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Berita</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Berita</li>
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
                            <a href="<?= base_url() ?>berita/" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?= base_url() ?>berita/create" enctype="multipart/form-data" novalidate>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">Judul berita :</label>
                                    <input type="text" class="form-control" name="judul">
                                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <div class="form-group">
                                        <label>Image :</label><br>
                                        <input type="file" name="image" id="image">
                                    </div>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label for="exampleInputFile">isi Berita :</label>
                                    <textarea class="ckeditor" id="ckedtor" name="isi"></textarea>
                                    <small class="form-text text-danger"><?= form_error('isi'); ?></small>
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