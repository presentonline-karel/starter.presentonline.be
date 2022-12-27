<section class="centeredContent-section">
    <div class="centeredContent blocks content-conatiner-xs">
        <?php foreach ($block->textContent()->toBlocks() as $block) : ?>
            <?= $block ?>
        <?php endforeach; ?>
    </div>
</section>