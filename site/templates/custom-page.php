<?php snippet('general/header') ?>

<!-- CONTAINER CUSTOMPAGE -->
<div id="container" class="container container-customPage">

    <!-- NAV -->
    <?php snippet('general/nav') ?>



    <!-- CONTENT -->
    <main class="customPage-section">
        <div class="customPage">
            <h1><?= $page->landingPageTitle() ?></h1>

            <section class="customPage__content blocks">
                <?php foreach ($page->customPageContent()->toBlocks() as $block) : ?>
                    <?= $block ?>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
</div>

<?php snippet('general/footer') ?>