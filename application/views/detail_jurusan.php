<main class="l-main">
    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">

            <div class="home__data">
                <h1 class="home__title">Program Keahlian</h1>
                <h3 class="home__subtitle"><?= $jurusan['nama_jurusan']; ?></h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>
    <!--========== Visi & Misi ==========-->
    <section class="about section bd-container" id="about">
        <div class="kepala__container  bd-grid">
            <div class="kepala__data">

                <img src="<?= base_url('assets/') ?>img/jurusan/<?= $jurusan['image_detail']; ?>" style="margin-top: -2rem;" alt="...">
                <span class="section-subtitle visi__initial" style="text-align: left; margin-top: 1em; font-size: 2em;"><?= $jurusan['nama_jurusan']; ?></span>

                <?= $jurusan['ket']; ?>

            </div>

        </div>
    </section>

</main>