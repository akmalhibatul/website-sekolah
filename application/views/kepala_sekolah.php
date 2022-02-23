<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Profile</h1>
                <h3 class="home__subtitle">Sambutan Kepala Sekolah</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>



    <!--========== Visi & Misi ==========-->
    <section class="about section bd-container" id="about">
        <div class="kepala__container  bd-grid">
            <div class="kepala__data">
                <span class="section-subtitle kepala__initial">Kepala Sekolah</span>
                <p class="kepala__description">
                    <?= $setting['sambutan_kepsek']; ?>
                </p>
            </div>

        </div>
    </section>

</main>