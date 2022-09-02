<?php snippet('general/header') ?>

<!-- CONTAINER CONTACT -->
<div id="container" class="container container-contact">

    <!-- HEADER CONTACT -->
    <header class="header header-contact">

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
                            <a class="button <?= $button->typeOfButton() ?>" href="<?php if($button->typeButton() == "external") { echo($button->externalUrl()); } elseif($button->typeButton() == "telephone") { echo("tel:" . $site->telephone()); } elseif($button->typeButton() == "email") { echo("mailto:" . $site->email()); } ?>"><?php if($button->typeButton() == "telephone") { ?> <i class="icon-first fa fa-phone" aria-hidden="true"></i> <?php } elseif($button->typeButton() == "email") { ?> <i class="icon-first fa fa-envelope" aria-hidden="true"></i> <?php } ?> <?= $button->anchor() ?></a>
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
            <form class="contact-form form">
                <div class="flex-desktop">

                    <!-- name -->
                    <div class="input-group">
                        <label class="input-group__label">Name</label>
                        <input class="input contact-form__input name" type="text" placeholder="Naam" />
                    </div>

                    <!-- email -->
                    <div class="input-group">
                        <label class="input-group__label">Email</label>
                        <input class="input contact-form__input email" type="text" placeholder="Email" />
                    </div>
                </div>

                <!-- subject -->
                <div class="input-group">
                    <label class="input-group__label">Subject</label>
                    <input class="input contact-form__input subject" type="text" placeholder="Onderwerp" />
                </div>

                <!-- message -->
                <div class="input-group">
                    <label class="input-group__label">Boodschap</label>
                    <textarea class="input textarea contact-form__input message" type="text" placeholder="Boodschap"></textarea>
                </div>

                <button class="button-primary" type="submit">Send <i class="anchor-first fa fa-paper-plane" aria-hidden="true"></i></button>
            </form>
        </div>
    </main>



    <!-- MAPS -->
    <section class="maps">

        <!-- Maps widget -->
        <iframe class="maps__iframe" src="<?= $page->mapsUrl() ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>

<?php snippet('general/footer') ?>