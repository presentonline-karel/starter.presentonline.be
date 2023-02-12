<form class="contact-form form" method="POST" action="<?= $page->url() ?>">
    <div class="contact-form__container">
        <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="url" name="website" tabindex="-1">
        </div>


        <!-- INPUTS -->
        <div class="flex-desktop">

            <!-- name -->
            <div class="input-group">
                <?php if($kirby->language()->code() == "nl") { $name = "Naam"; } elseif($kirby->language()->code() == "fr") { $name = "Nom"; } elseif($kirby->language()->code() == "en") { $name = "Name"; } ?>

                <label class="input-group__label"><?= $name ?></label>
                <input class="input contact-form__input name" type="text" name="name" placeholder="<?= $name ?>" />

                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>

            <!-- email -->
            <div class="input-group">
                <?php if($kirby->language()->code() == "nl") { $email = "Email"; } elseif($kirby->language()->code() == "fr") { $email = "E-mail"; } elseif($kirby->language()->code() == "en") { $email = "Email"; } ?>

                <label class="input-group__label"><?= $email ?></label>
                <input class="input contact-form__input email" type="text" name="email" placeholder="<?= $email ?>" />

                <i class="fa fa-check-circle" aria-hidden="true"></i>
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <small>Error message</small>
            </div>
        </div>

        <!-- subject -->
        <div class="input-group">
            <?php if($kirby->language()->code() == "nl") { $subject = "Onderwerp"; } elseif($kirby->language()->code() == "fr") { $subject = "Sujet"; } elseif($kirby->language()->code() == "en") { $subject = "Subject"; } ?>

            <label class="input-group__label"><?= $subject ?></label>
            <input class="input contact-form__input subject" type="text" name="subject" placeholder="<?= $subject ?>" />

            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <small>Error message</small>
        </div>

        <!-- message -->
        <div class="input-group">
            <?php if($kirby->language()->code() == "nl") { $message = "Boodschap"; } elseif($kirby->language()->code() == "fr") { $message = "Message"; } elseif($kirby->language()->code() == "en") { $message = "Message"; } ?>

            <label class="input-group__label"><?= $message ?></label>
            <textarea class="input textarea contact-form__input message" type="text" name="message" placeholder="<?= $message ?>"></textarea>

            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
            <small>Error message</small>
        </div>

        <button class="button-primary" type="submit" name="submit" value="Verstuur"><?php if($kirby->language()->code() == "nl") { ?> Verstuur <?php } elseif($kirby->language()->code() == "fr") { ?> Envoyer <?php } elseif($kirby->language()->code() == "en") { ?> Send <?php } ?> <i class="anchor-first fa fa-paper-plane" aria-hidden="true"></i></button>
    </div>
</form>