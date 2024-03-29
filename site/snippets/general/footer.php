        <footer id="footer" class="footer fade-section">
            <div class="content-container-l content-container">
                <div class="footer-blocks">
                    <a class="back-to-top" href="#container" aria-label="Back to top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

                    <div class="footer__block intro">
                        <?php if ($site->logoLight()->isNotEmpty()) : ?>
                            <img class="footer-logo" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" loading="lazy" />
                        <?php endif; ?>

                        <p><?= $site->intro() ?></p>

                        <?php snippet("general/socials") ?>
                    </div>



                    <div class="footer__block contact">
                        <h4>Contact</h4>

                        <div class="contact-info">
                            <?php if($site->telephone()->isNotEmpty()): ?>
                                <a class="footer__a" href="tel:<?= $site->telephone() ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?= $site->telephone() ?></a>
                            <?php endif; ?>

                            <?php if($site->email()->isNotEmpty()): ?>
                                <a class="footer__a" href="mailto:<?= $site->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $site->email() ?></a>
                            <?php endif; ?>
                        </div>
                    </div>



                    <div class="footer__block sitemap">
                        <h4>Sitemap</h4>

                        <?php if($site->sitemap()->isNotEmpty()): ?>
                            <?php foreach($site->sitemap()->toStructure() as $sitemapItem): ?>
                                <a class="footer__a" href="<?= $sitemapItem->page()->toPage()->url() . $sitemapItem->section() ?>"><?= $sitemapItem->anchor() ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <hr class="line footer-line">

                <p class="footer__copyright"><span class="copyright">© <?php echo date("Y"); ?> Bakery</span> <?php if($site->privacyPolicyPage()->isNotEmpty()) { ?> <a class="privacyPolicy" href="<?= $site->privacyPolicyPage()->toPage()->url() ?>"><?= $site->privacyPolicyAnchor() ?></a> <?php } ?> <span class="starterKit"><?php if($kirby->language()->code() == "nl") { ?> Website gemaakt met <?php } elseif($kirby->language()->code() == "fr") { ?> Site web créé avec <?php } elseif($kirby->language()->code() == "en") { ?> Website created with <?php } ?> <a href="https://presentonline.be/nl/starter-kit" target="_blank">Present Online Starter Kit</a></span></p>
            </div>
        </footer>

        

        <?= js("build/js/general/nav.js", ["defer" => true]) ?>
        <?= js("build/js/general/languageDropdown.js", ["defer" => true]) ?>
        <?= js("build/js/general/section-fade-animation.js", ["defer" => true]) ?>

        <!-- Cookies -->
        <?php if($site->cookiesSwitch()->toBool() && $page->id() != "privacybeleid"): ?>
            <?= js('build/js/general/cookies.js', ['defer' => true]) ?>
        <?php endif; ?>

        <!-- Light/dark mode -->
        <?php if($site->lightDarkModeSwitch() == "lightDarkMode"): ?>
            <?= js("build/js/general/light-dark-switch.js", ["defer" => true]) ?>
        <?php endif; ?>

        <!-- Custom page - custom block divider -->
        <?php if($page->template() == "custom-page"): ?>
            <?= js("build/js/custom-page/customBlockDivider.js", ["defer" => true]) ?>
        <?php endif; ?>
    </body>
</html>