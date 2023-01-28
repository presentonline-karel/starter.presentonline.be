<?php snippet("general/header") ?>

<!-- CONTAINER LANDINGPAGE -->
<div id="container" class="container container-landingPage">

    <!-- USP-BAR -->
    <?php snippet("general/usp-bar-impl") ?>

    <!-- NAV -->
    <?php snippet("general/nav") ?>



    <!-- CONTENT -->
    <main class="landingPage-section">
        <div class="landingPage">
            <h1><?= $page->landingPageTitle() ?></h1>

            <section class="landingPage__content blocks">
                <?php foreach ($page->landingPageContent()->toBlocks() as $block) : ?>
                    <?= $block ?>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
</div>

<?php snippet("general/footer") ?>