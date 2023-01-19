<!-- HEADER CONTACT -->
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



    <!-- NAV -->
    <?php snippet("general/nav") ?>

    <!-- HEADER CONTACT - CONTENT -->
    <div class="header-contact__content">
        <div class="header-contact__content__text">
            <h1>Get in touch</h1>
            <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.</p>

            <!-- Hero buttons -->
            <?php /*if ($page->heroButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($page->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">

                    <!-- button -->
                    <?php foreach ($page->heroButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif;*/ ?>
        </div>

        <!-- Openinghours -->
        <?php if ($site->openingHours()->isNotEmpty()) : ?>
            <div class="header-contact__content__hours">
                <h4>Openingsuren</h4>

                <!-- openinghour -->
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