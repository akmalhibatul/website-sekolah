<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Setting</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Setting</li>
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
          <div class="callout callout-danger">
            <h4>warning!</h4>
            <ul>
              <li>
                <p>Ukuran <b>Logo</b> :<br>Max Width : 67 pixel<br>Max Height : 76 pixel</p>
              </li>
              <li>
                <p>Ukuran <b>Logo Panjang</b> :<br>Max Width : 270 pixel<br>Max Height : 80 pixel</p>
              </li>
              <li>
                <p>Ukuran <b>Slide</b> :<br>Max Width : 1140 pixel<br>Max Height : 440 pixel</p>
              </li>

              <li>
                <p>Ukuran <b>Image About</b> :<br>Max Width : 800 pixel<br>Max Height : 800 pixel</p>
              </li>
            </ul>

          </div>
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
            <div class="card-body">
              <form method="post" action="<?= base_url() ?>setting/update" enctype="multipart/form-data" novalidate>
                <div class="tab-content">
                  <div class="form-group row">
                    <input type="hidden" name="id" value="<?= $setting['id']; ?>">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Logo</label>
                    <div class="col-sm-5">
                      <div style="margin:inherit;margin-bottom:10px"><img src="<?= base_url('assets/') ?>img/<?= $setting['logo']; ?>" width="200" /></div>
                      <input type="file" class="file" name="logo">
                      <input type="hidden" name="old_logo" value="<?= $setting['logo']; ?>">
                      <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                      <div class="upload-img-thumb"><span class="img-prop"></span></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Logo Panjang</label>
                    <div class="col-sm-5">
                      <div style="margin:inherit;margin-bottom:10px"><img src="<?= base_url('assets/') ?>img/<?= $setting['logo_panjang']; ?>" width="300" /></div>
                      <input type="file" class="file" name="logo_panjang">
                      <input type="hidden" name="old_logo_panjang" value="<?= $setting['logo_panjang']; ?>">
                      <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                      <div class="upload-img-thumb"><span class="img-prop"></span></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Slide 1</label>
                    <div class="col-sm-5">
                      <div style="margin:inherit;margin-bottom:10px">
                        <img src="<?= base_url('assets/') ?>img/<?= $setting['slide1']; ?>" width="300" />
                      </div>
                      <input type="file" class="file" name="slide1">
                      <input type="hidden" name="old_slide1" value="<?= $setting['slide1']; ?>">
                      <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                      <div class="upload-img-thumb"><span class="img-prop"></span></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Slide 2</label>
                    <div class="col-sm-5">
                      <div class="edit-logo-login-container"><img src="<?= base_url('assets/') ?>img/<?= $setting['slide2']; ?>" width="300" /></div>
                      <input type="file" class="file" name="slide2">
                      <input type="hidden" name="old_slide2" value="<?= $setting['slide2']; ?>">
                      <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                      <div class="upload-img-thumb"><span class="img-prop"></span></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Slide 3</label>
                    <div class="col-sm-5">
                      <div class="edit-logo-login-container"><img src="<?= base_url('assets/') ?>img/<?= $setting['slide3']; ?>" width="300" /></div>
                      <input type="file" class="file" name="slide3">
                      <input type="hidden" name="old_slide3" value="<?= $setting['slide3']; ?>">
                      <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                      <div class="upload-img-thumb"><span class="img-prop"></span></div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Image About</label>
                    <div class="col-sm-5">
                      <div class="edit-logo-login-container"><img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" width="200" /></div>
                      <input type="file" class="file" name="image_about">
                      <input type="hidden" name="old_image_about" value="<?= $setting['image_about']; ?>">
                      <small class="form-text text-danger">*Tipe file: .JPG, .JPEG, .PNG. Maksimal 300Kb</small>
                      <div class="upload-img-thumb"><span class="img-prop"></span></div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">About</label>
                    <div class="col-sm-5">
                      <textarea class="ckeditor" name="about" rows="5"><?= $setting['about']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Visi</label>
                    <div class="col-sm-5">
                      <textarea class="ckeditor" name="visi" rows="5"><?= $setting['visi']; ?></textarea>
                      <small class="form-text text-danger">*Jangan Mengahapus semua kata sekaligus, Harap Hanya diganti!!</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Misi</label>
                    <div class="col-sm-5">
                      <textarea class="ckeditor" id="ckedtor" name="misi" rows="5"><?= $setting['misi']; ?></textarea>
                      <small class="form-text text-danger">*Jangan Mengahapus semua kata sekaligus, Harap Hanya diganti!!</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Sambutan Kepsek</label>
                    <div class="col-sm-5">
                      <textarea class="ckeditor" id="ckedtor" name="sambutan_kepsek" rows="5"><?= $setting['sambutan_kepsek']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Waktu Pendaftaran</label>
                    <div class="col-sm-5">
                      <textarea class="ckeditor" id="ckedtor" name="waktu_pendaftaran" rows="5"><?= $setting['waktu_pendaftaran']; ?></textarea>
                      <small class="form-text text-danger">*Jangan Mengahapus semua kata sekaligus, Harap Hanya diganti!!</small>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-md-2 col-lg-3 col-xl-2 col-form-label">Persyaratan Administrasi</label>
                    <div class="col-sm-5">
                      <textarea class="ckeditor" id="ckedtor" name="persyaratan" rows="5"><?= $setting['persyaratan']; ?></textarea>
                      <small class="form-text text-danger">*Jangan Mengahapus semua kata sekaligus, Harap Hanya diganti!!</small>
                    </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-sm-5">
                      <button type="submit" name="submit" id="btn-submit" value="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>