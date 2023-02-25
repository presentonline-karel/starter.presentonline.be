<?php isset($block) ? $textWithImageContent = $block : $textWithImageContent = $page; ?>

<section class="content-section fade-section">
    <div class="content content-container-l content-container r-106">
        <?php if($textImage = $textWithImageContent->contentImage()->toFile()): ?>
            <div class="content__image">
                <?php snippet("helpers/image-builder", ["imageFile" => $textImage]) ?>

                <?php /* <img
                    alt="<?= $textImage->alt() ?>"
                    src="<?= $textImage->thumb(['width' => 300, 'height' => 300, 'crop' => 'center', 'quality' => 70,])->url() ?>"
                    srcset="<?= $textImage->srcset(
                        [
                            '300w'  => ['width' => 300, 'height' => 300, 'crop' => 'center', 'quality' => 50],
                            '600w'  => ['width' => 600, 'height' => 600, 'crop' => 'center', 'quality' => 50],
                            '900w'  => ['width' => 900, 'height' => 900, 'crop' => 'center', 'quality' => 50],
                            '1200w' => ['width' => 1200, 'height' => 1200, 'crop' => 'center', 'quality' => 50],
                            '1800w' => ['width' => 1800, 'height' => 1800, 'crop' => 'center', 'quality' => 50],
                        ]
                    )?>"
                    width="<?= $textImage->thumb(['width' => 1800, 'height' => 1800, 'quality' => 50, 'crop' => true])->width() ?>"
                    height="<?= $textImage->thumb(['width' => 1800, 'height' => 1800, 'quality' => 50, 'crop' => true])->height() ?>"
                > */ ?>
            </div>
        <?php endif; ?>

        <div class="content__text">
            <div class="blocks">
                <?php foreach ($textWithImageContent->contentBlocks()->toBlocks() as $block) : ?>
                    <?= $block ?>
                <?php endforeach; ?>
            </div>

            <?php if ($textWithImageContent->contentButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($textWithImageContent->contentButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($textWithImageContent->contentButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>