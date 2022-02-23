<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="col-md-12">
    <?php if ($this->session->flashdata('message')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= $this->session->flashdata('message'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
  </div>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
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
        <div class="col-lg-3 col-6">
          <?php
          include 'koneksi.php';
          // Data akun
          $data_akun = mysqli_query($koneksi, "SELECT * FROM guru");
          $jumlah_guru = mysqli_num_rows($data_akun);

          // Data jurusan
          $data_jurusan = mysqli_query($koneksi, "SELECT * FROM jurusan");
          $jumlah_jurusan = mysqli_num_rows($data_jurusan);

          // Data Berita
          $data_berita = mysqli_query($koneksi, "SELECT * FROM berita");
          $jumlah_berita = mysqli_num_rows($data_berita);

          // Data Galeri
          $data_galeri = mysqli_query($koneksi, "SELECT * FROM galeri");
          $jumlah_galeri = mysqli_num_rows($data_galeri);
          ?>
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $jumlah_guru; ?></h3>
              <p>Data Guru</p>
            </div>

            <a href="<?= base_url() ?>guru/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $jumlah_jurusan; ?></h3>

              <p>Jurusan</p>
            </div>

            <a href="<?= base_url() ?>jurusan/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $jumlah_berita; ?></h3>

              <p>Berita</p>
            </div>

            <a href="<?= base_url() ?>berita/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $jumlah_galeri; ?></h3>

              <p>Galeri</p>
            </div>

            <a href="<?= base_url() ?>galeri/" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>