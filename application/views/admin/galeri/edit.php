<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Galeri</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Galeri</li>
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
                            <a href="<?= base_url() ?>galeri/" class="btn btn-danger">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url() ?>galeri/update" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="col-md-12 mb-2">
                                    <input type="hidden" value="<?= $galeri['id']; ?>" name="id">
                                    <div class="form-group">
                                        <h5>Foto <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="image" class="form-control">
                                            <img src="<?= base_url('assets/') ?>img/galery/<?= $galeri['image']; ?>" style="width: 120px;margin-bottom: 10px;margin-top: 20px;">
                                        </div>
                                        <input type="hidden" name="old_image" value="<?= $galeri['image']; ?>">
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