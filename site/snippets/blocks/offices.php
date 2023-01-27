<?php isset($block) ? $officesContent = $block : $officesContent = $page; ?>

<section id="offices" class="offices-section section fade-section">
    <div class="content-container-l content-container">
        <div class="offices-section__header">
            <h2 class="offices-section__header__title"><?= $officesContent->officesTitle() ?></h2>
            <p class="offices-section__header__intro"><?= $officesContent->officesParagraph() ?></p>
        </div>

        <!-- Offices -->
        <?php if($officesContent->offices()->isNotEmpty()): ?>
            <div class="offices swiper">
                <div class="swiper-wrapper">
                    <?php foreach($officesContent->offices()->toStructure() as $office): ?>
                        <div class="office swiper-slide <?php if($office->headOfficeToggle()->toBool()) { echo("headOffice"); } ?>">
                            <h3 class="office__title"><?= $office->place() ?></h3>
                            <span class="headOffice__label">Hoofdkantoor</span>

                            <div class="office__info">
                                <div class="office__info__item"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="office__info__item__text"><?= $office->address() ?></span></div>
                                <a class="office__info__item" href="tel:<?= $office->phoneNumber() ?>"><i class="fa fa-phone" aria-hidden="true"></i> <span class="office__info__item__text"><?= $office->phoneNumber() ?></span></a>
                                <a class="office__info__item" href="mailto<?= $office->email() ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <span class="office__info__item__text"><?= $office->email() ?></span></a>
                            </div>

                            <a class="office__directions button-tertiary" href="<?= $office->mapsLink() ?>" target="_blank">Routebeschrijving <i class="fa fa-chevron-right anchor-first" aria-hidden="true"></i></a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= js("/build/js/swiper/offices.js", ["defer" => true]) ?>