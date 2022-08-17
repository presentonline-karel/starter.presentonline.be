<?php snippet('general/header') ?>

<!-- CONTAINER ERROR -->
<div id="container" class="container container-error">

    <!-- NAV -->
    <?php snippet('general/nav') ?>



    <!-- ERROR-CONTAINER -->
    <section class="error-content">
        <h1>Oooppsss</h1>
        <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken.</p>

        <a class="button-primary" href="<?= $site->url() ?>">Home <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </section>
</div>

<?php snippet('general/footer') ?>