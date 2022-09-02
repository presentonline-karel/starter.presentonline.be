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
                <h1><?= $page->heroTitle() ?> <span><?= $page->heroTitleSpan() ?></span></h1>
                <p><?= $page->heroIntro() ?></p>

                <!-- Hero buttons -->
                <?php if($page->heroButtons()->isNotEmpty()): ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach($page->heroButtons()->toStructure() as $button): ?>
                            <a class="button <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Hero image -->
            <?php if($page->heroImage()->isNotEmpty()): ?>
                <div class="header__content__image">
                    <img src="<?= $page->heroImage()->toFile()->url() ?>" alt="<?= $page->heroImage()->toFile()->alt() ?>">
                </div>
            <?php endif; ?>
        </div>

        <!-- Scroll down -->
        <a class="scroll-down" href="<?= $site->url() ?>/home#clients">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
    </header>



    <!-- CLIENTS -->
    <section id="clients" class="clients-section section">
        <h2><?= $page->clientsTitle() ?></h2>

        <!-- Clients -->
        <?php if($page->clients()->isNotEmpty()): ?>
            <div class="clients">

                <!-- client -->
                <?php foreach($page->clients()->toStructure() as $client): ?>

                    <?php if($client->url()->isNotEmpty()): ?>
                        <a class="client" href="<?= $client->url() ?>" target="_blank">
                            <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo">
                        </a>
                    <?php else: ?>
                        <div class="client">
                            <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo">
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>



    <!-- SERVICES -->
    <section id="services" class="services-section section">
        <h2><?= $page->servicesTitle() ?></h2>

        <!-- Services -->
        <?php if($page->services()->isNotEmpty()): ?>
            <div class="services">

                <!-- service -->
                <?php foreach($page->services()->toStructure() as $service): ?>
                    <div class="service">

                        <!-- service - icon -->
                        <div class="service__icon-container">
                            <?php switch ($service->icon()) {
                                case "planning":
                                    ?><i class="fa fa-calendar" aria-hidden="true"></i><?php
                                    break;
                                case "followup":
                                    ?><i class="fa fa-plane" aria-hidden="true"></i><?php
                                    break;
                                case "transport":
                                    ?><i class="fa fa-car" aria-hidden="true"></i><?php
                                    break;
                                default:
                                ?><i class="fa fa-check" aria-hidden="true"></i><?php
                            } ?>
                        </div>

                        <h3><?= $service->title() ?></h3>
                        <p><?= $service->paragraph() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- <div class="services">
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
        </div> -->

        <!-- CTA DESKTOP -->
        <div class="cta__content">
            <h2>Ready to dive in?<br> Start your free trial now!</h2>
            <a class="button-primary" href="#">Free trial <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </section>



    <!-- CTA MOBILE -->
    <section id="cta-1" class="cta">
        <div class="cta__content">
            <h2><?= $page->firstCtaTitle() ?> <span><?= $page->firstCtaTitleSpan() ?></span></h2>

            <!-- CTA buttons -->
            <?php if($page->firstCtaButtons()->isNotEmpty()): ?>
                <div class="buttons">

                    <!-- button -->
                    <?php foreach($page->firstCtaButtons()->toStructure() as $button): ?>
                        <a class="button-white" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>



    <!-- CONTENT -->
    <?php snippet('general/content') ?>



    <!-- TESTIMONIALS -->
    <section id="testimonials" class="testimonials section">
        <h2><?= $page->testimonialsTitle() ?></h2>

        <!-- Testimonials items -->
        <?php if ($page->testimonials()->isNotEmpty()) : ?>
            <div class="testimonials-items">
                <?php foreach ($page->testimonials()->toStructure() as $testimonial) : ?>

                    <!-- testimonial -->
                    <div class="slide-container testimonial">
                        
                        <!-- testimonial company logo -->
                        <?php if($testimonial->logo()->isNotEmpty()): ?>
                            <img class="testimonial__logo" src="<?= $testimonial->logo()->toFile()->url() ?>" alt="<?= $testimonial->logo()->toFile()->alt() ?>" />
                        <?php endif; ?>

                        <!-- quotes-bg -->
                        <i class="quotes fa fa-quote-left" aria-hidden="true"></i>

                        <!-- testimonial -->
                        <p class="testimonial__p"><?= $testimonial->testimonial() ?></p>

                        <!-- person -->
                        <div class="testimonial__id flex">

                            <!-- image -->
                            <?php if($testimonial->imageTestimonial()->isNotEmpty()): ?>
                                <img class="testimonial__id__picture" src="<?= $testimonial->imageTestimonial()->toFile()->url() ?>" alt="<?= $testimonial->imageTestimonial()->toFile()->alt() ?>" />
                            <?php endif; ?>

                            <div>
                                <h5 class="testimonial__id__name"><?= $testimonial->name() ?></h5>
                                <p class="testimonial__id__function"><?= $testimonial->function() ?></p>
                            </div>
                        </div>

                        <!-- arrows -->
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
            <h2><?= $page->secondCtaTitle() ?> <span><?= $page->secondCtaTitleSpan() ?></span></h2>

            <!-- CTA buttons -->
            <?php if($page->secondCtaButtons()->isNotEmpty()): ?>
                <div class="buttons">

                    <!-- button -->
                    <?php foreach($page->secondCtaButtons()->toStructure() as $button): ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>