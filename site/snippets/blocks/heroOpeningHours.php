<?php isset($block) ? $heroOpeningHoursContent = $block : $heroOpeningHoursContent = $page; ?>

<header class="header header-contact">

    <!-- ERROR/SUCCESS MESSAGE - CONTACT FORM -->
    <?php if ($success) : ?>
        <div class="alert success">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <p><?= $success ?></p>
        </div>
    <?php else : ?>
        <?php if (isset($alert["error"])) : ?>
            <div class="alert error">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <p><?= $alert["error"] ?></p>
            </div>
        <?php endif ?>
    <?php endif; ?>



    <!-- Nav -->
    <?php snippet("general/nav") ?>



    <div class="header-contact__content">

        <!-- Text + cta -->
        <div class="header-contact__content__text">
            <h1><?= $heroOpeningHoursContent->heroTitle() ?></h1>
            <p><?= $heroOpeningHoursContent->heroIntro() ?></p>

            <?php if ($heroOpeningHoursContent->heroButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if (count($heroOpeningHoursContent->heroButtons()->toStructure()) == 1) { echo ("single-button"); } ?>">
                    <?php foreach ($heroOpeningHoursContent->heroButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Openinghours -->
        <?php if ($site->openingHours()->isNotEmpty()) : ?>
            <div class="header-contact__content__hours">
                <h4><?php if($kirby->language()->code() == "nl") { ?> Openingsuren <?php } elseif($kirby->language()->code() == "fr") { ?> Heures d'ouverture <?php } elseif($kirby->language()->code() == "en") { ?> Opening hours <?php } ?></h4>

                <?php foreach ($site->openingHours()->toStructure() as $openinghour) : ?>
                    <div class="header-contact__content__hours__item">
                        <p class="day"><?= $openinghour->day() ?></p>
                        <p class="hour"><?= $openinghour->value() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</header>