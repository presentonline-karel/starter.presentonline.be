<?php snippet('general/header') ?>

<!-- CONTAINER CONTACT -->
<div id="container" class="container container-contact">

    <!-- HEADER CONTACT -->
    <header class="header header-contact">

        <!-- ERROR/SUCCESS MESSAGE - CONTACT FORM -->
        <?php if ($success) : ?>
            <div class="alert success">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <p><?= $success ?></p>
            </div>
        <?php else : ?>
            <?php if (isset($alert['error'])) : ?>
                <div class="alert error">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                    <p><?= $alert['error'] ?></p>
                </div>
            <?php endif ?>
        <?php endif; ?>

        

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER CONTACT - CONTENT -->
        <div class="header-contact__content">
            <div class="header-contact__content__text">
                <h1><?= $page->heroTitle() ?></h1>
                <p><?= $page->heroIntro() ?></p>

                <!-- Hero buttons -->
                <?php if($page->heroButtons()->isNotEmpty()): ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach($page->heroButtons()->toStructure() as $button): ?>
                            <?php snippet('components/button', ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Openinghours -->
            <?php if($page->openingHours()->isNotEmpty()): ?>
                <div class="header-contact__content__hours">
                    <h4>Openingsuren</h4>

                    <!-- openinghour -->
                    <?php foreach($page->openingHours()->toStructure() as $openinghour): ?>
                        <div class="header-contact__content__hours__item">
                            <p class="day"><?= $openinghour->day() ?></p>
                            <p class="hour"><?= $openinghour->value() ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </header>



    <!-- CONTACT -->
    <main class="contact">

        <!-- INFO -->
        <div class="contact__info">
            <h2><?= $page->contactInfoTitle() ?></h2>
            <p><?= $page->contactInfoText() ?></p>

            <div class="contact__info__items">

                <!-- Telephone -->
                <?php if($site->telephone()->isNotEmpty()): ?>
                    <a class="info-item p" href="tel:<?= $site->telephone() ?>">
                        <i class="fa fa-phone" aria-hidden="true"></i> <?= $site->telephone() ?>
                    </a>
                <?php endif; ?>

                <!-- Email -->
                <?php if($site->email()->isNotEmpty()): ?>
                    <a class="info-item p" href="mailto:<?= $site->email() ?>">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <?= $site->email() ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- SNIPPET - SOCIALS -->
            <?php snippet('general/socials') ?>
        </div>



        <!-- FORMSECTION -->
        <div class="contact__form-section">
            <h2>Of vul ons formulier in</h2>

            <!-- Contactform -->
            <?php snippet('contact/form') ?>
        </div>
    </main>



    <!-- MAPS -->
    <section class="maps">

        <!-- Maps widget -->
        <iframe class="maps__iframe" src="<?= $page->mapsUrl() ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/contact/form-feedback.js', ['defer' => true]) ?>



<?php snippet('general/footer') ?>