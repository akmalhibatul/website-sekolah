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
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Galeri</li>
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
          <?php if ($this->session->flashdata('error')) : ?>
            <div class="row mt-4">
              <div class="col-md-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <?= $this->session->flashdata('error'); ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
            </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-header">
              <a href="<?= base_url() ?>galeri/tambah" class="btn btn-primary">Tambah Foto</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($galeri as $g) :
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><img src="<?= base_url('assets/') ?>img/galery/<?= $g['image']; ?>" alt="" width="200"></td>
                      <td>
                        <a href="<?= base_url() ?>galeri/edit/<?= $g['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a> 
                        <a href="<?= base_url() ?>galeri/hapus/<?= $g['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus foto?')"><i class="fas fa-trash"></i></a>
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