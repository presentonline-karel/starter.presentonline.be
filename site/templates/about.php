<?php snippet('general/header') ?>

<!-- CONTAINER ABOUT -->
<div id="container" class="container container-about">

    <!-- HEADER ABOUT -->
    <header class="header header-about">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER ABOUT - CONTENT -->
        <div class="header__content">
            <div class="header__content__text">
                <h1>The team behind the project</h1>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.</p>

                <a class="button-primary" href="#">Our history <i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="header__content__image">
            <img src="<?= $site->url() ?>/assets/img/header.jpg" alt="header image">
        </div>
    </header>



    <!-- HISTORY -->
    <section id="history" class="history section">
        <h2>Our history</h2>

        <div class="history__numbers">
            <div class="history-item">
                <h5 class="history-item__label">Onze start</h5>
                <h1 class="history-item__number counter" data-target="2016">2016</h1>
            </div>

            <div class="history-item">
                <h5 class="history-item__label">Tevreden klanten</h5>
                <h1 class="history-item__number counter plus" data-target="50">50+</h1>
            </div>

            <div class="history-item">
                <h5 class="history-item__label">Another number</h5>
                <h1 class="history-item__number counter plus" data-target="100">100+</h1>
            </div>
        </div>
    </section>



    <!-- CONTENT -->
    <section class="content">

        <!-- Content image -->
        <div class="content__image">
            <img src="<?= $site->url() ?>/assets/img/header.jpg" alt="header image">
        </div>

        <!-- Content text -->
        <div class="content__text">
            <h2>Our approach</h2>
            <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

            <ul class="list">
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 1</li>
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 2</li>
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 3</li>
                <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> Bullet point 4</li>
            </ul>

            <a class="button-primary" href="#">Explore <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </section>



    <!-- TEAM -->
    <section class="team section">
        <h2>Who is making it happen every day?</h2>
        <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud.</p>

        <div class="employees">
            <div class="employee">
                <img class="employee__img" src="<?= $site->url() ?>/assets/img/karel.jpg" alt="employee image">

                <h5>Karel Decoene</h5>
                <p>Co-founder / CTO</p>
            </div>

            <div class="employee">
                <img class="employee__img" src="<?= $site->url() ?>/assets/img/karel.jpg" alt="employee image">

                <h5>Karel Decoene</h5>
                <p>Co-founder / CTO</p>
            </div>

            <div class="employee">
                <img class="employee__img" src="<?= $site->url() ?>/assets/img/karel.jpg" alt="employee image">

                <h5>Karel Decoene</h5>
                <p>Co-founder / CTO</p>
            </div>

            <div class="employee">
                <img class="employee__img" src="<?= $site->url() ?>/assets/img/karel.jpg" alt="employee image">

                <h5>Karel Decoene</h5>
                <p>Co-founder / CTO</p>
            </div>
        </div>
    </section>



    <!-- CTA -->
    <section id="cta-1" class="cta">
        <h2>Ready to dive in?<br> <span>Start your free trial now!</span></h2>
        <a class="button-primary" href="#">Free trial <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </section>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/about/counter-animation.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>