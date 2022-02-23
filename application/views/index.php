<main class="l-main">
    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner slider__img">
                <div class="carousel-item active">
                    <img src="<?= base_url('assets/') ?>img/<?= $setting['slide1']; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/') ?>img/<?= $setting['slide2']; ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('assets/') ?>img/<?= $setting['slide3']; ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>



    <!--========== ABOUT ==========-->
    <section class="about section bd-container" id="about">
        <div class="about__container  bd-grid">
            <div class="about__data">
                <span class="section-subtitle about__initial">Tentang Kami</span>
                <p class="about__description"><?= $setting['about']; ?></p>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="about__img">
        </div>
    </section>

    <!--========== SERVICES ==========-->
    <section class="services section bd-container" id="services">
        <h2 class="section-title">Program Keahlian</h2>

        <div class="services__container  bd-grid">
            <?php
            include('admin/koneksi.php');
            $query = mysqli_query($koneksi, "SELECT * FROM jurusan ORDER BY id DESC LIMIT 6");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <div class="services__content">
                    <img src="<?= base_url('assets/') ?>img/jurusan/<?= $data['image']; ?>" class="img__icon" alt="">
                    <a href="<?= base_url() ?>page/detail_jurusan/<?= $data['id']; ?>">
                        <h3 class="services__title"><?= $data['nama_jurusan']; ?></h3>
                    </a>
                    <p class="services__description">
                        <?php
                        $string = $data['ket'];
                        if (strlen($string) > 117) $string = substr($string, 0, 117) . '...';
                        echo strip_tags($string);
                        ?>
                    </p>
                </div>
            <?php } ?>

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
                            <p class="card-text">
                                <?php
                                $string = $b['isi'];
                                if (strlen($string) > 148) $string = substr($string, 0, 148) . '...';
                                echo strip_tags($string);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
        <a href="<?= base_url() ?>page/pengumuman" class="button mt-3">Lihat Berita Lainnya</a>
    </section>


</main>