<?php isset($block) ? $textWithImageContent = $block : $textWithImageContent = $page; ?>

<section class="content-section fade-section">
    <div class="content content-container-l content-container r-106">
        <?php if($textWithImageContent->contentImage()->isNotEmpty()): ?>
            <div class="content__image">
                <?php
                    $imageFullName = $textWithImageContent->contentImage()->toFile()->filename();
                    $imageWebpExtension = substr($imageFullName, 0, strrpos($imageFullName, ".")) . ".webp";
                ?>

                <picture>
                    <source srcSet="<?= $page->image($imageWebpExtension)->url() ?>" type="image/webp" />
                    <source srcSet="<?= $textWithImageContent->contentImage()->toFile()->url() ?>" type="image/jpg" />
                    <img src="<?= $textWithImageContent->contentImage()->toFile()->url() ?>" alt="<?= $textWithImageContent->contentImage()->toFile()->alt() ?>" loading="lazy" />
                </picture>
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
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if ($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif ($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>