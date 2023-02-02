<?php isset($block) ? $textWithImageContent = $block : $textWithImageContent = $page; ?>

<section class="content-section fade-section">
    <div class="content content-container-l content-container r-106">
        <?php if($textImage = $textWithImageContent->contentImage()->toFile()): ?>
            <div class="content__image">
                <?php snippet("helpers/image-builder", ["imageFile" => $textImage]) ?>
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