<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">PPBD</h1>
                <h3 class="home__subtitle">Pendaftaran Online</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>



    <!--========== Visi & Misi ==========-->
    <section class="about section bd-container" id="about">
        <div class="visi__container  bd-grid">
            <div class="visi__data">
                <span class="section-subtitle visi__initial" style="font-size: 2em;">Petunjuk Pengisian</span>
                <p class="visi__description">Bagi calon siswa yang ingin mendaftar di SMK YAYASAN ISLAM TASIKMALAYA secara online, silahkan mengisi
                    formulir pendaftaran dibawah ini dengan lengkap dan benar. Setelah berhasil melakukan pendaftaran online,
                    calon siswa akan di Hubungi oleh pihak pihak Sekolah untuk konfirmasi pendaftaran dari. Kemudian diperlihatkan ke staff Tata Usaha SMK YAYASAN ISLAM TASIKMALAYA
                    saat melakukan pembayaran formulir sebesar Rp.125.000,-</p>
            </div>
        </div>

        <form class="g-3" method="post" action="<?= base_url() ?>page/daftar" novalidate>
            <div class="col-12">
                <label for="validationCustom01" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama_siswa" required>
                <small class="form-text text-danger"><?= form_error('nama_siswa'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom02" class="form-label">NISN</label>
                <input type="text" class="form-control" name="nisn" required>
                <small class="form-text text-danger"><?= form_error('nisn'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom03" class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" name="tempat_tanggal_lahir" required>
                <small class="form-text text-danger"><?= form_error('tempat_tanggal_lahir'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom04" class="form-label">E-mail</label>
                <input type="text" class="form-control" name="email" required>
                <small class="form-text text-danger"><?= form_error('email'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom05" class="form-label">No HP/Telp</label>
                <input type="text" class="form-control" name="no_telp" required>
                <small class="form-text text-danger"><?= form_error('no_telp'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom06" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" name="asal_sekolah" required>
                <small class="form-text text-danger"><?= form_error('asal_sekolah'); ?></small>
            </div>


            <div class="col-12 mt-3">
                <label for="validationCustom07" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" name="nama_ibu" required>
                <small class="form-text text-danger"><?= form_error('nama_ibu'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom07" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" name="nama_ayah" required>
                <small class="form-text text-danger"><?= form_error('nama_ayah'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom07" class="form-label">No HP/ Telp Orang Tua</label>
                <input type="text" class="form-control" name="no_telp_ortu" required>
                <small class="form-text text-danger"><?= form_error('no_telp_ortu'); ?></small>
            </div>

            <div class="col-12 mt-3">
                <label for="validationCustom08" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" required>
                <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
            </div>


            <div class="custom-select" style="width:200px; margin-top: 1rem;">
                <label for="">Jenis kelamin</label>
                <select name="jenis_kelamin">
                    <?php foreach ($jenis_kelamin as $jk) : ?>
                        <option value="<?= $jk; ?>"><?= $jk; ?></option>
                    <?php endforeach; ?>
                </select>
                <small class="form-text text-danger"><?= form_error('jenis_kelamin'); ?></small>
            </div>
            <br>
            <br>

            <div class="col-12">
                <button class="btn btn-primary" style="margin-top: 1rem;" type="submit">Kirim</button>
            </div>
        </form>


    </section>

</main>