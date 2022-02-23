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
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Berita</li>
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
              <a href="<?= base_url() ?>berita/tambah" class="btn btn-primary">Tambah Berita</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Judul</th>
                    <th>Image</th>
                    <th>isi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($berita as $b) :
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $b['judul']; ?></td>
                      <td><img src="<?= base_url('assets/') ?>img/berita/<?= $b['image']; ?>" alt="" width="300"></td>
                      <td><?= $b['isi']; ?></td>
                      <td>
                        <a href="<?= base_url() ?>berita/edit/<?= $b['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url() ?>berita/hapus/<?= $b['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus berita?')"><i class="fas fa-trash"></i></a>
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