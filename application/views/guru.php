<main class="l-main">

    <!--========== HOME ==========-->
    <section class="home" id="home">
        <div class="home__container bd-container bd-grid">
            <div class="home__data">
                <h1 class="home__title">Profile</h1>
                <h3 class="home__subtitle">Profile Guru</h3>
            </div>

            <img src="<?= base_url('assets/') ?>img/<?= $setting['image_about']; ?>" alt="" class="home__img">
        </div>
    </section>

    <!--========== Guru ==========-->
    <section class="bd-container" id="about">
        <div class="kepala__container bd-grid">
            <h2 class="section-title-guru mb-3">Profile Guru</h2>
            <div class="row">
                <?php
                foreach ($guru as $g) :
                ?>
                    <div class="col-lg-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/') ?>img/guru/<?= $g['image']; ?>" alt="..." style="margin-top: 1em;margin-bottom: 1em;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $g['nama_guru']; ?></h5>
                                        <p class="card-text">Guru <?= $g['pelajaran']; ?></p>
                                        <ul class="list__guru">
                                            <li>Kelas : <?= $g['kelas']; ?></li>
                                            <li>Alamat : <?= $g['alamat_guru']; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>

    </section>


</main>