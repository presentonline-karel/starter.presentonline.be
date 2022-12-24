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
                <h1><?= $page->heroTitle() ?><br> <span><?= $page->heroTitleSpan() ?></span></h1>
                <p><?= $page->heroIntro() ?></p>

                <!-- Hero buttons -->
                <?php if ($page->heroButtons()->isNotEmpty()) : ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach ($page->heroButtons()->toStructure() as $button) : ?>
                            <?php snippet('components/button', ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Hero image -->
            <?php if ($page->heroImage()->isNotEmpty()) : ?>
                <div class="header__content__image">
                    <img src="<?= $page->heroImage()->toFile()->thumb(['format' => 'webp'])->url() ?>" alt="<?= $page->heroImage()->toFile()->alt() ?>">
                </div>
            <?php endif; ?>
        </div>

        <!-- Scroll down -->
        <a class="scroll-down" href="<?= $site->url() ?>/home#clients">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
    </header>



    <!-- CLIENTS -->
    <?php if($page->clientsSwitch()->toBool()): ?>
        <section id="clients" class="clients-section section fade-section">
            <div class="content-container-l content-container">
                <h2><?= $page->clientsTitle() ?></h2>

                <!-- Clients -->
                <?php if ($page->clients()->isNotEmpty()) : ?>
                    <div class="clients">

                        <!-- client -->
                        <?php foreach ($page->clients()->toStructure() as $client) : ?>

                            <?php if ($client->url()->isNotEmpty()) : ?>
                                <a class="client" href="<?= $client->url() ?>" target="_blank">
                                    <?php if ($client->logo()->isNotEmpty()) : ?>
                                        <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo" loading="lazy">
                                    <?php endif; ?>
                                </a>
                            <?php else : ?>
                                <div class="client">
                                    <?php if ($client->logo()->isNotEmpty()) : ?>
                                        <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo" loading="lazy">
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>



    <!-- SERVICES -->
    <?php if($page->servicesSwitch()->toBool()): ?>
        <section id="services" class="services-section section fade-section">
            <div class="content-container-l content-container">
                <h2><?= $page->servicesTitle() ?></h2>

                <!-- Services -->
                <?php if ($page->services()->isNotEmpty()) : ?>
                    <div class="services">

                        <!-- service -->
                        <?php foreach ($page->services()->toStructure() as $service) : ?>
                            <?php if($service->containsLink()->toBool() == true): ?>
                                <a class="service" href="<?php if ($service->destination() == "internal") { echo ($service->internalPage()->toPage()->url() . $service->idPage()); } else { echo ($service->externalUrl()); } ?>" <?php if ($service->destination() == "external") { ?> target="_blank" <?php } ?>>
                                
                                    <!-- service - icon -->
                                    <div class="service__icon-container">
                                        <?php switch ($service->icon()) {
                                            case "coffee":
                                                ?><i class="fa fa-coffee" aria-hidden="true"></i><?php
                                                break;
                                            case "cake":
                                                ?><i class="fa fa-pie-chart" aria-hidden="true"></i><?php
                                                break;
                                            case "heart":
                                                ?><i class="fa fa-heart" aria-hidden="true"></i><?php
                                                break;
                                            default:
                                                ?><i class="fa fa-check" aria-hidden="true"></i><?php
                                        } ?>
                                    </div>

                                    <h3><?= $service->title() ?></h3>
                                    <p><?= $service->paragraph() ?></p>
                                </a>
                            <?php else: ?>
                                <div class="service">

                                    <!-- service - icon -->
                                    <div class="service__icon-container">
                                        <?php switch ($service->icon()) {
                                            case "coffee":
                                                ?><i class="fa fa-coffee" aria-hidden="true"></i><?php
                                                break;
                                            case "cake":
                                                ?><i class="fa fa-pie-chart" aria-hidden="true"></i><?php
                                                break;
                                            case "heart":
                                                ?><i class="fa fa-heart" aria-hidden="true"></i><?php
                                                break;
                                            default:
                                                ?><i class="fa fa-check" aria-hidden="true"></i><?php
                                        } ?>
                                    </div>

                                    <h3><?= $service->title() ?></h3>
                                    <p><?= $service->paragraph() ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <!-- CTA DESKTOP -->
                <div class="cta__content">
                    <h2><?= $page->firstCtaTitle() ?> <span><?= $page->firstCtaTitleSpan() ?></span></h2>

                    <!-- CTA buttons -->
                    <?php if ($page->firstCtaButtons()->isNotEmpty()) : ?>
                        <div class="buttons">

                            <!-- button -->
                            <?php foreach ($page->firstCtaButtons()->toStructure() as $button) : ?>
                                <?php snippet('components/button', ["button" => $button]) ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>



    <!-- CTA MOBILE -->
    <?php if($page->firstCtaSwitch()->toBool()): ?>
        <section id="cta-1" class="cta fade-section">
            <div class="cta__content">
                <h2><?= $page->firstCtaTitle() ?> <span><?= $page->firstCtaTitleSpan() ?></span></h2>

                <!-- CTA buttons -->
                <?php if ($page->firstCtaButtons()->isNotEmpty()) : ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach ($page->firstCtaButtons()->toStructure() as $button) : ?>
                            <?php snippet('components/button', ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>



    <!-- CONTENT -->
    <?php if($page->contentSwitch()->toBool()): ?>
        <?php snippet('general/content') ?>
    <?php endif; ?>



    <!-- TESTIMONIALS -->
    <?php if($page->testimonialsSwitch()->toBool()): ?>
        <section id="testimonials" class="testimonials-section section fade-section">
            <div class="testimonials content-container-s content-container">
                <h2><?= $page->testimonialsTitle() ?></h2>

                <!-- Testimonials items -->
                <?php if ($page->testimonials()->isNotEmpty()) : ?>
                    <div class="testimonials-items">
                        <?php foreach ($page->testimonials()->toStructure() as $testimonial) : ?>

                            <!-- testimonial -->
                            <div class="slide-container testimonial">

                                <!-- testimonial company logo -->
                                <?php if ($testimonial->logo()->isNotEmpty()) : ?>
                                    <img class="testimonial__logo" src="<?= $testimonial->logo()->toFile()->url() ?>" alt="<?= $testimonial->logo()->toFile()->alt() ?>" loading="lazy" />
                                <?php endif; ?>

                                <!-- quotes-bg -->
                                <i class="quotes fa fa-quote-left" aria-hidden="true"></i>

                                <!-- testimonial -->
                                <p class="testimonial__p"><?= $testimonial->testimonial() ?></p>

                                <!-- person -->
                                <div class="testimonial__id flex">

                                    <!-- image -->
                                    <?php if ($testimonial->imageTestimonial()->isNotEmpty()) : ?>
                                        <img class="testimonial__id__picture" src="<?= $testimonial->imageTestimonial()->toFile()->url() ?>" alt="<?= $testimonial->imageTestimonial()->toFile()->alt() ?>" loading="lazy" />
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
            </div>
        </section>
    <?php endif; ?>



    <!-- CTA -->
    <?php if($page->secondCtaSwitch()->toBool()): ?>
        <section id="cta-2" class="cta fade-section">
            <div class="content-container-l content-container">
                <div class="cta__content">
                    <h2><?= $page->secondCtaTitle() ?> <span><?= $page->secondCtaTitleSpan() ?></span></h2>

                    <!-- CTA buttons -->
                    <?php if ($page->secondCtaButtons()->isNotEmpty()) : ?>
                        <div class="buttons">

                            <!-- button -->
                            <?php foreach ($page->secondCtaButtons()->toStructure() as $button) : ?>
                                <?php snippet('components/button', ["button" => $button]) ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>



<?php snippet('general/footer') ?>