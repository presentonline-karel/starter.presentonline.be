<?php
    if(isset($block)) {
        $ctaContent = $block;
    }
    else {
        $ctaContent = $page;
    }
?>

<section id="cta-1" class="cta fade-section <?php if(isset($customClass)) { echo($customClass); } ?>">
    <div class="content-container-l content-container">
        <div class="cta__content">
            <h2><?= $ctaContent->firstCtaTitle() ?><br> <span><?= $ctaContent->firstCtaTitleSpan() ?></span></h2>

            <?php if ($ctaContent->firstCtaButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($ctaContent->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($ctaContent->firstCtaButtons()->toStructure() as $button) : ?>
                        <?php snippet('components/button', ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>