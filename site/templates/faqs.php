<?php snippet("general/header") ?>

<!-- CONTAINER FAQ -->
<div id="container" class="container container-faq">

    <!-- HEADER FAQ -->
    <?php snippet("blocks/heroNoImage") ?>



    <!-- FAQs -->
    <?php if ($page->faqs()->isNotEmpty()) : ?>
        <?php snippet("blocks/faqs") ?>
    <?php endif; ?>
</div>



<?php snippet("general/footer") ?>