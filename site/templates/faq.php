<?php snippet('general/header') ?>

<!-- CONTAINER FAQ -->
<div id="container" class="container container-faq">

    <!-- HEADER FAQ -->
    <header class="header header-faq">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER FAQ - CONTENT -->
        <div class="header-faq__content">
            <h1>Frequently asked questions</h1>
            <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.</p>
        </div>
    </header>



    <!-- FAQs -->
    <main class="faqs">
        <div class="faq">
            <div class="faq__question">
                <h4 class="faq__question__title">What is the best form of marketing?</h4>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>

            <div class="faq__answer">
                <p class="faq__answer__p">
                    Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.
                </p>
            </div>
        </div>

        <div class="faq">
            <div class="faq__question">
                <h4 class="faq__question__title">What is the best form of marketing?</h4>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>

            <div class="faq__answer">
                <p class="faq__answer__p">
                    Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.
                </p>
            </div>
        </div>

        <div class="faq">
            <div class="faq__question">
                <h4 class="faq__question__title">What is the best form of marketing?</h4>
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
            </div>

            <div class="faq__answer">
                <p class="faq__answer__p">
                    Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de.
                </p>
            </div>
        </div>



        <!-- Button - Back home -->
        <a class="button-primary" href="#">Home <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/faq/accordion.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>