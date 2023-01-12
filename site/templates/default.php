<?php snippet("general/header") ?>

<!-- CONTAINER ERROR -->
<div id="container" class="container container-error">

    <!-- NAV -->
    <?php snippet("general/nav") ?>



    <!-- ERROR-CONTAINER -->
    <section class="error-content">
        <h1><?= $page->errorPageTitle() ?></h1>
        <p><?= $page->errorPageParagraph() ?></p>

        <a class="button-primary" href="<?= $site->url() ?>">Home <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </section>
</div>



<?php snippet("general/footer") ?>