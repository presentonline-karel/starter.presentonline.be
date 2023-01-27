<?php isset($block) ? $ctaDoubleContent = $block : $ctaDoubleContent = $page; ?>

<section class="cta-double section fade-section">
    <div class="cta-double__container content-container-l content-container">

        <!-- CTA1 -->
        <div class="cta-double__cta">
            <h2><?= $ctaDoubleContent->firstCtaTitle() ?><br> <span><?= $ctaDoubleContent->firstCtaTitleSpan() ?></span></h2>

            <?php if ($ctaDoubleContent->firstCtaButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($ctaDoubleContent->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($ctaDoubleContent->firstCtaButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- CTA2 -->
        <div class="cta-double__cta">
            <h2><?= $ctaDoubleContent->secondCtaTitle() ?><br> <span><?= $ctaDoubleContent->secondCtaTitleSpan() ?></span></h2>

            <?php if ($ctaDoubleContent->secondCtaButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($ctaDoubleContent->secondCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($ctaDoubleContent->secondCtaButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>