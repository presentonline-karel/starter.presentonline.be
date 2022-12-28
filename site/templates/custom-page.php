<?php snippet('general/header') ?>

<!-- CONTAINER CUSTOMPAGE -->
<div id="container" class="container container-customPage">

    <?php foreach ($page->customPageHeader()->toBlocks() as $block) : ?>
        <?= $block ?>
    <?php endforeach; ?>



    <!-- CONTENT -->
    <main id="page-sections" class="customPage-section">
        <div class="customPage">
            <section class="customPage__content">
                <?php foreach ($page->customPageContent()->toBlocks() as $block) : ?>
                    <?= $block ?>
                <?php endforeach; ?>
            </section>
        </div>
    </main>
</div>

<?= js('build/js/custom-page/backgrounds.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>