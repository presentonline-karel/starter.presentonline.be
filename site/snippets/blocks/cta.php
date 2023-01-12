<section class="cta fade-section">
    <div class="content-container-l content-container">
        <div class="cta__content">
            <h2><?= $block->titleDefault() ?><br> <span><?= $block->titleColor() ?></span></h2>

            <!-- CTA buttons -->
            <?php if ($block->buttons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($block->buttons()->toBlocks()) == 1) { echo("single-button"); } ?>">

                    <!-- button -->
                    <?php foreach ($block->buttons()->toBlocks() as $button): ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>