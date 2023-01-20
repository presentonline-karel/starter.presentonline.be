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
    <?php //snippet("blocks/usp-bar") ?>



    <!-- STEPS -->
    <?php snippet("blocks/steps") ?>



    <!-- OFFICES -->
    <?php //snippet("blocks/offices") ?>



    <!-- CTA DOUBLE -->
    <?php //snippet("blocks/cta-double") ?>



    <!-- CTA WITH IMAGE -->
    <?php //snippet("blocks/cta-with-image") ?>



    <!-- TABS -->
    <?php //snippet("blocks/tabs") ?>



    <!-- IMAGE CAROUSEL -->
    <?php //snippet("blocks/image-carousel") ?>



    <!-- HERO OPENING HOURS -->
    <?php //snippet("blocks/heroOpeningHours") ?>



    <!-- HERO OPENING HOURS -->
    <?php snippet("blocks/blog-articles") ?>



    <!-- HERO OPENING HOURS -->
    <?php //snippet("blocks/pricing-plans") ?>



    <!-- TEXT TWO COLUMNS -->
    <?php //snippet("blocks/textTwoColumns") ?>
    


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

<?= js("build/js/custom-page/backgrounds.js", ["defer" => true]) ?>

<?php snippet("general/footer") ?>