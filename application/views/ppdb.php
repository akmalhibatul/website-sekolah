<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Informasi</h1>
                <h3 class="home__subtitle">PPDB</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>



    <!--========== Visi & Misi ==========-->
    <section class="about section bd-container" id="about">
        <div class="visi__container  bd-grid">

            <div class="visi__data">
                <span class="section-subtitle visi__initial" style="font-size: 2em; margin-top: -3rem;">Waktu Pendaftaran</span>
                <!-- <h3 class="visi__description">1. Gelombang Pertama</h3>
                    <ul class="list__misi">
                        <li>Pendaftaran : Januari - Februari 2020</li>
                        <li>Seleksi Bakat dan Minat : Tentatif</li>
                    </ul>

                    <h3 class="visi__description">2. Gelombang Kedua</h3>
                    <ul class="list__misi">
                        <li>Pendaftaran : Januari - Februari 2020</li>
                        <li>Seleksi Bakat dan Minat : Tentatif</li>
                    </ul>

                    <h3 class="visi__description">3. Gelombang Ketiga</h3>
                    <ul class="list__misi">
                        <li>Pendaftaran : Januari - Februari 2020</li>
                        <li>Seleksi Bakat dan Minat : Tentatif</li>
                    </ul> -->

                <?= $setting['waktu_pendaftaran']; ?>


            </div>


            <div class="visi__data">
                <span class="section-subtitle misi__initial" style="font-size: 2em;">Persyaratan Administrasi</span>
                <div class="list__misi">
                    <?= $setting['persyaratan']; ?>
                </div>
            </div>
        </div>
        <a target="_blank" href="<?= base_url() ?>page/pendaftaran" class="button mt-3">Daftar Sekarang</a>

    </section>


</main>