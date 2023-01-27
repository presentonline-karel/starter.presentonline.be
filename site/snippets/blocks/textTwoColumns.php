<?php isset($block) ? $textTwoColumnsContent = $block : $textTwoColumnsContent = $page; ?>

<section class="textTwoColumns-section section fade-section">
    <div class="textTwoColumns-container content-container-m content-container">
        <div class="blocks">
            <?php foreach ($textTwoColumnsContent->contentColumnOne()->toBlocks() as $block) : ?>
                <?= $block ?>
            <?php endforeach; ?>
        </div>

        <div class="blocks">
            <?php foreach ($textTwoColumnsContent->contentColumnTwo()->toBlocks() as $block) : ?>
                <?= $block ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>