<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Informasi</h1>
                <h3 class="home__subtitle">Pengumuman</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/berita/1.png" alt="" class="home__img">
        </div>
    </section>

    <!--========== Berita ==========-->
    <section class="menu__container bd-container" id="menu">
        <h2 class="section-title mb-3">Berita Terkini</h2>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
            <?php
            foreach ($berita as $b) :
            ?>
                <div class="col">
                    <div class="card">
                        <a href="<?= base_url() ?>page/artikel/<?= $b['id']; ?>"><img src="<?= base_url('assets/') ?>img/berita/<?= $b['image']; ?>" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $b['judul']; ?></h5>
                            <p class="card-text"><?php
                                                    $string = $b['isi'];
                                                    if (strlen($string) > 117) $string = substr($string, 0, 117) . '...';
                                                    echo strip_tags($string);
                                                    ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


        </div>
        <center><?php echo $this->pagination->create_links(); ?></center>

    </section>


</main>