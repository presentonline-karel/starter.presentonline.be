<?php snippet("general/header") ?>

<!-- CONTAINER CONTACT -->
<div id="container" class="container container-contact">

    <!-- USP-BAR -->
    <?php snippet("helpers/usp-bar-impl") ?>

    

    <!-- HEADER CONTACT -->
    <?php snippet("blocks/heroOpeningHours") ?>



    <!-- CONTACT -->
    <?php snippet("blocks/contact") ?>



    <!-- MAPS -->
    <?php if ($page->contactMapsSwitch()->toBool()) : ?>
        <?php snippet("blocks/maps") ?>
    <?php endif; ?>
</div>



<?php snippet("general/footer") ?>