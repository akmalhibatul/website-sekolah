<!--========== FOOTER ==========-->
<footer class="footer section">
    <div class="footer__container bd-grid">
        <div class="footer__content">
            <h3 class="footer__title">Sosial Media</h3>
            <div class="footer__title">
                <a href="#" class="footer__social"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>



        <div class="footer__content">
            <h3 class="footer__title">Tentang Kami</h3>
            <ul>
                <li class="footer__description"><?= $setting['about']; ?></li>

            </ul>
        </div>
    </div>

    <p class="footer__copy">&#169; <?= date('Y') ?> SMK YAYASAN ISLAM TASIKMALAYA. All right reserved</p>
</footer>

<!--========== SCROLL REVEAL ==========-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--========== MAIN JS ==========-->
<script src="<?= base_url('assets/') ?>js/main2.js"></script>
<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>

<!-- Js Plugins -->
<script src="<?= base_url('assets/') ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/') ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('assets/') ?>js/mixitup.min.js"></script>
<script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/') ?>js/main.js"></script>
</body>

</html>