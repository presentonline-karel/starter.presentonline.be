        <!-- FOOTER -->
        <footer id="footer" class="footer">

            <!-- Back to top -->
            <a class="back-to-top" href="#container"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

            <div class="footer-blocks">
                <div class="footer__block intro">

                    <!-- Logo -->
                    <?php if ($site->logoLight()->isNotEmpty()) : ?>
                        <img class="footer-logo" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
                    <?php endif; ?>

                    <!-- Intro -->
                    <p><?= $site->intro() ?></p>

                    <!-- SNIPPET - SOCIALS -->
                    <?php snippet('general/socials') ?>
                </div>

                <div class="footer__block contact">
                    <h4>Contact</h4>

                    <div class="contact-info">

                        <!-- Telephone -->
                        <?php if($site->telephone()->isNotEmpty()): ?>
                            <a class="footer__a" href="tel:<?= $site->telephone() ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?= $site->telephone() ?></a>
                        <?php endif; ?>

                        <!-- Email -->
                        <?php if($site->email()->isNotEmpty()): ?>
                            <a class="footer__a" href="mailto:<?= $site->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $site->email() ?></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="footer__block sitemap">
                    <h4>Sitemap</h4>

                    <?php if($site->sitemap()->isNotEmpty()): ?>
                        <?php foreach($site->sitemap()->toStructure() as $sitemapItem): ?>
                            <a class="footer__a" href="<?php $sitemapItem->page()->toPage()->url() . $sitemapItem->section() ?>"><?= $sitemapItem->anchor() ?></a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <hr class="line footer-line">

            <p class="footer__copyright"><span>©Bakery. Website gemaakt met</span><br class="mobile"> <a href="https://presentonline.be" target="_blank">Present Online Starter Kit</a></p>
        </footer>

        <!-- MOBILE NAV SCRIPT -->
        <?= js('build/js/general/nav.js', ['defer' => true]) ?>
    </body>
</html>