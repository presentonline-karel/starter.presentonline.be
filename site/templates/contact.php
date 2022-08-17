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
                <h1>Get in touch</h1>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.</p>

                <div class="buttons">
                    <a class="button button-primary" href="#"><i class="icon-first fa fa-phone" aria-hidden="true"></i> Bellen</a>
                    <a class="button button-secondary" href="#"><i class="icon-first fa fa-envelope" aria-hidden="true"></i> Mailen</a>
                </div>
            </div>

            <div class="header-contact__content__hours">
                <h4>Openingsuren</h4>

                <div class="header-contact__content__hours__item">
                    <p class="day">Maandag</p>
                    <p class="hour">08:00 - 20:00</p>
                </div>

                <div class="header-contact__content__hours__item">
                    <p class="day">Dinsdag</p>
                    <p class="hour">08:00 - 20:00</p>
                </div>

                <div class="header-contact__content__hours__item">
                    <p class="day">Woensdag</p>
                    <p class="hour">08:00 - 20:00</p>
                </div>

                <div class="header-contact__content__hours__item">
                    <p class="day">Donderdag</p>
                    <p class="hour">08:00 - 20:00</p>
                </div>

                <div class="header-contact__content__hours__item">
                    <p class="day">Vrijdag</p>
                    <p class="hour">08:00 - 20:00</p>
                </div>

                <div class="header-contact__content__hours__item">
                    <p class="day">Zaterdag</p>
                    <p class="hour">08:00 - 20:00</p>
                </div>

                <div class="header-contact__content__hours__item">
                    <p class="day">Zondag</p>
                    <p class="hour">Gesloten</p>
                </div>
            </div>
        </div>
    </header>



    <!-- CONTACT -->
    <main class="contact">

        <!-- INFO -->
        <div class="contact__info">
            <h2>Contact info</h2>
            <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.</p>

            <div class="contact__info__items">
                <a class="info-item p" href="#">
                    <i class="fa fa-phone" aria-hidden="true"></i> 0478 69 58 69
                </a>
                <a class="info-item p" href="#">
                    <i class="fa fa-envelope" aria-hidden="true"></i> info@yourwebsite.be
                </a>
            </div>

            <div class="socials">
                <a class="social" href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a class="social" href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a class="social" href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="social" href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a class="social" href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a class="social" href="#" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i></a>
            </div>
        </div>



        <!-- FORMSECTION -->
        <div class="contact__form-section">
            <h2>Or fill in our form</h2>

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
        <iframe class="maps__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20010.737409779438!2d4.335697066645055!3d51.17591594832772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3f3fc0ac00573%3A0xaa07251a0773698b!2sHoboken%2C%202660%20Antwerpen!5e0!3m2!1snl!2sbe!4v1660726573267!5m2!1snl!2sbe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</div>

<?php snippet('general/footer') ?>