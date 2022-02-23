<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Profile</h1>
                <h3 class="home__subtitle">Visi & Misi</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>



    <!--========== Visi & Misi ==========-->
    <section class="about section bd-container" id="about">
        <div class="visi__container  bd-grid">
            <div class="visi__data">
                <span class="section-subtitle visi__initial">Visi</span>
                <?= $setting['visi']; ?>
            </div>


            <div class="visi__data">
                <span class="section-subtitle misi__initial">Misi</span>
                <?= $setting['misi']; ?>
            </div>
        </div>
    </section>

</main>