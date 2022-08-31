        <!-- FOOTER -->
        <footer id="footer" class="footer">

            <!-- Back to top -->
            <a class="back-to-top" href="#container"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

            <div class="footer-blocks">
                <div class="footer__block intro">

                    <!-- logo -->
                    <?php if ($site->logoLight()->isNotEmpty()) : ?>
                        <img class="footer-logo" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
                    <?php endif; ?>

                    <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                    <!-- SNIPPET - SOCIALS -->
                    <?php snippet('general/socials') ?>
                </div>

                <div class="footer__block contact">
                    <h4>Contact</h4>

                    <div class="contact-info">
                        <a class="footer__a" href="tel:0478693669"><i class="fa fa-phone" aria-hidden="true"></i> 0477 69 36 69</a>
                        <a class="footer__a" href="mailto:info@presentonline.be"><i class="fa fa-envelope" aria-hidden="true"></i> info@test.be</a>
                    </div>
                </div>

                <div class="footer__block sitemap">
                    <h4>Sitemap</h4>

                    <a class="footer__a" href="#">Home</a>
                    <a class="footer__a" href="#">About us</a>
                    <a class="footer__a" href="#">Blog</a>
                    <a class="footer__a" href="#">FAQ</a>
                    <a class="footer__a" href="#">Contact</a>
                </div>
            </div>

            <hr class="line footer-line">

            <p class="footer__copyright">©YourWebsite. All rights reserved.<br class="mobile"> Website door <a href="#">Present Online</a></p>
        </footer>

        <!-- MOBILE NAV SCRIPT -->
        <?= js('build/js/general/nav.js', ['defer' => true]) ?>
    </body>
</html>