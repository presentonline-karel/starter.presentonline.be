<?php snippet('general/header') ?>

<!-- CONTAINER HOME -->
<div id="container" class="container container-home">

    <!-- HEADER HOME -->
    <header id="header" class="header header-home">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER HOME - CONTENT -->
        <div class="header-home__content">
            <div class="header-home__content__text">
                <h1>No troubles, yes <span>amazing vacation!</span></h1>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

                <div class="buttons">
                    <a class="button button-primary" href="#">Get started</a>
                    <a class="button button-secondary" href="#">Live demo <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="header__content__image">
                <img src="<?= $site->url() ?>/assets/img/header.jpg" alt="header image">
            </div>
        </div>

        <!-- Scroll down -->
        <a class="scroll-down" href="<?= $site->url() ?>/home#clients">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
    </header>



    <!-- CLIENTS -->
    <section id="clients" class="clients-section section">
        <h2>Our clients</h2>

        <div class="clients">
            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-1.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-2.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-1.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-2.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-1.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-2.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-1.svg" alt="client logo">
            </div>

            <div class="client">
                <img src="<?= $site->url() ?>/assets/img/logo-client-2.svg" alt="client logo">
            </div>
        </div>
    </section>



    <!-- SERVICES -->
    <section id="services" class="services-section section">
        <h2>Services</h2>

        <div class="services">
            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </div>

                <h3>Holiday planning</h3>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>
            </div>

            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                </div>

                <h3>Flight followup</h3>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>
            </div>

            <div class="service">
                <div class="service__icon-container">
                    <i class="fa fa-car" aria-hidden="true"></i>
                </div>

                <h3>Transport provider</h3>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>
            </div>
        </div>

        <!-- CTA DESKTOP -->
        <div class="cta__content">
            <h2>Ready to dive in?<br> Start your free trial now!</h2>
            <a class="button-primary" href="#">Free trial <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </section>



    <!-- CTA MOBILE -->
    <section id="cta-1" class="cta">
        <div class="cta__content">
            <h2>Ready to dive in?<br> Start your free trial now!</h2>
            <a class="button-white" href="#">Free trial <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </section>



    <!-- CONTENT -->
    <section id="content" class="content">

        <!-- Content image -->
        <div class="content__image">
            <img src="<?= $site->url() ?>/assets/img/header.jpg" alt="header image">
        </div>

        <!-- Content text -->
        <div class="content__text">
            <h2>Our approach</h2>
            <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

            <ul class="list">
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 1</li>
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 2</li>
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 3</li>
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 4</li>
            </ul>

            <a class="button-primary" href="#">Explore <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </section>



    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials section">
        <h2><?= $page->testimonialsTitle() ?></h2>

        <!-- Testimonials items -->
        <?php if ($page->testimonials()->isNotEmpty()) : ?>
            <div class="testimonials-items">
                <?php foreach ($page->testimonials()->toStructure() as $testimonial) : ?>

                    <!-- testimonial -->
                    <div class="slide-container testimonial">
                        <img class="testimonial__logo" src="<?= $site->url() ?>/assets/img/logo-client-2.svg" />

                        <i class="quotes fa fa-quote-left" aria-hidden="true"></i>

                        <p class="testimonial__p"><?= $testimonial->testimonial() ?></p>

                        <div class="testimonial__id flex">

                            <!-- Testimonial image (+fallback) -->
                            <?php if ($testimonialImageWebp = $testimonial->imageWebp()->toFile()) : ?>
                                <?php if ($testimonialImageJpg = $testimonial->imageWebp()->toFile()) : ?>
                                    <picture>
                                        <source srcSet="<?= $testimonialImageWebp->url() ?>" type="image/webp" />
                                        <source srcSet="<?= $testimonialImageJpg->url() ?>" type="image/jpg" />
                                        <img class="testimonial__id__picture" src="<?= $testimonialImageJpg->url() ?>" alt="<?= $testimonialImageJpg->alt() ?>" />
                                    </picture>
                                <?php endif; ?>
                            <?php endif; ?>

                            <div>
                                <h5 class="testimonial__id__name"><?= $testimonial->name() ?></h5>
                                <p class="testimonial__id__function"><?= $testimonial->function() ?></p>
                            </div>
                        </div>

                        <div class="arrows flex">
                            <div class="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- testimonials bullets -->
            <div class="bullets">
                <?php foreach ($page->testimonials()->toStructure() as $testimonial) : ?>
                    <div class="bullet"></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>



    <!-- CTA -->
    <section id="cta-2" class="cta">
        <div class="cta__content">
            <h2>Ready to dive in?<br> <span>Start your free trial now!</span></h2>

            <div class="buttons">
                <a class="button button-primary" href="#">Free trial</a>
                <a class="button button-primary" href="#">Live demo <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>