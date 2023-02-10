<?php snippet("general/header") ?>

<!-- CONTAINER CUSTOMPAGE -->
<div id="container" class="container container-customPage">

    <!-- ERROR/SUCCESS MESSAGE - CONTACT FORM -->
    <?php if ($success) : ?>
        <div class="alert success">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            <p><?= $success ?></p>
        </div>
    <?php else : ?>
        <?php if (isset($alert["error"])) : ?>
            <div class="alert error">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                <p><?= $alert["error"] ?></p>
            </div>
        <?php endif ?>
    <?php endif; ?>



    <!-- USP-BAR -->
    <?php snippet("helpers/usp-bar-impl") ?>

    <!-- HERO -->
    <?php foreach ($page->customPageHeader()->toBlocks() as $block) : ?>
        <?= $block ?>
    <?php endforeach; ?>



    <!-- CONTENT -->
    <main id="page-sections" class="customPage-section">
        <div class="customPage">
            <div class="customPage__content">
                <?php foreach ($page->customPageContent()->toBlocks() as $block) : ?>
                    <?= $block ?>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</div>

<?php snippet("general/footer") ?>