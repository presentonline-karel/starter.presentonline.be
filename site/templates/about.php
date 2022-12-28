<?php snippet('general/header') ?>

<!-- CONTAINER ABOUT -->
<div id="container" class="container container-about">

    <!-- HEADER ABOUT -->
    <?php snippet("blocks/heroDefault") ?>



    <!-- HISTORY -->
    <?php if ($page->historySwitch()->toBool()) : ?>
        <?php snippet("blocks/history") ?>
    <?php endif; ?>



    <!-- CONTENT -->
    <?php if ($page->contentSwitch()->toBool()) : ?>
        <?php snippet('blocks/textWithImage') ?>
    <?php endif; ?>



    <!-- TEAM -->
    <?php if ($page->teamSwitch()->toBool()) : ?>
        <?php snippet('blocks/team') ?>
    <?php endif; ?>



    <!-- CTA -->
    <?php if ($page->firstCtaSwitch()->toBool()) : ?>
        <?php snippet("blocks/firstCta") ?>
    <?php endif; ?>
</div>



<?php snippet('general/footer') ?>