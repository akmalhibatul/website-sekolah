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
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Jurusan</li>
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
              <a href="<?= base_url() ?>jurusan/tambah" class="btn btn-primary">Tambah Jurusan</a>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Jurusan</th>
                    <th>Image</th>
                    <th>Ket</th>
                    <th>Image</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($jurusan as $j) :
                  ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $j['nama_jurusan']; ?></td>
                      <td><img src="<?= base_url('assets/') ?>img/jurusan/<?= $j['image']; ?>" alt="" width="200"></td>
                      <td><?= $j['ket']; ?></td>
                      <td><img src="<?= base_url('assets/') ?>img/jurusan/<?= $j['image_detail']; ?>" alt="" width="200"></td>
                      <td>
                        <a href="<?= base_url() ?>jurusan/edit/<?= $j['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url() ?>jurusan/hapus/<?= $j['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus jurusan?')"><i class="fas fa-trash"></i></a>
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