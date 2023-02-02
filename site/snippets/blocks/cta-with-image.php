<?php isset($block) ? $ctaWithImageContent = $block : $ctaWithImageContent = $page; ?>

<section class="cta-with-image fade-section">
    <div class="cta-with-image__container content-container-l content-container">
        <?php if($ctaImage = $ctaWithImageContent->ctaImage()->toFile()): ?>
            <?php snippet("helpers/image-builder", ["imageFile" => $ctaImage]) ?>
        <?php endif; ?>

        <div class="cta-with-image__content">
            <h3><?= $ctaWithImageContent->ctaTitle() ?></h3>
            <p><?= $ctaWithImageContent->ctaParagraph() ?></p>

            <?php if ($ctaWithImageContent->ctaButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($ctaWithImageContent->ctaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($ctaWithImageContent->ctaButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>