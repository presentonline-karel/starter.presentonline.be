<?php
    if(isset($block)) {
        $contactContent = $block;
    }
    else {
        $contactContent = $page;
    }
?>

<section class="contact">

    <!-- INFO -->
    <div class="contact__info">
        <div class="contact__info__container">
            <h2><?= $contactContent->contactInfoTitle() ?></h2>
            <p><?= $contactContent->contactInfoText() ?></p>

            <div class="contact__info__items">

                <!-- Telephone -->
                <?php if ($site->telephone()->isNotEmpty()) : ?>
                    <a class="info-item p" href="tel:<?= $site->telephone() ?>">
                        <i class="fa fa-phone" aria-hidden="true"></i> <?= $site->telephone() ?>
                    </a>
                <?php endif; ?>

                <!-- Email -->
                <?php if ($site->email()->isNotEmpty()) : ?>
                    <a class="info-item p" href="mailto:<?= $site->email() ?>">
                        <i class="fa fa-envelope" aria-hidden="true"></i> <?= $site->email() ?>
                    </a>
                <?php endif; ?>
            </div>

            <!-- SNIPPET - SOCIALS -->
            <?php snippet("general/socials") ?>
        </div>
    </div>



    <!-- FORMSECTION -->
    <div class="contact__form-section">
        <h2>Of vul ons formulier in</h2>

        <!-- Contactform -->
        <?php snippet("contact/form") ?>
    </div>
</section>

<?= js("build/js/contact/form-feedback.js", ["defer" => true]) ?>