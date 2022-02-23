<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">

            <div class="home__data">
                <h1 class="home__title">Galeri</h1>
                <h3 class="home__subtitle">Galeri Sekolah</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>

    <!--========== Galery ==========-->
    <section class="about section bd-container">
        <div class="kepala__container bd-grid" style="margin-top: -3em;">
            <h2 class="section-title-guru mb-3">Album Foto</h2>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($galeri as $g) : ?>
                    <div class="col">
                        <div class="card">
                            <img src="<?= base_url('assets/') ?>img/galery/<?= $g['image']; ?>" class="card-img-top" alt="...">
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <center><?php echo $this->pagination->create_links(); ?></center>
    </section>

</main>