<section class="content-section fade-section">
    <div class="content content-container-l content-container r-106">
        <?php if($block->contentImage()->isNotEmpty()): ?>
            <div class="content__image">
                <img src="<?= $block->contentImage()->toFile()->url() ?>" alt="<?= $block->contentImage()->toFile()->alt() ?>" loading="lazy">
            </div>
        <?php endif; ?>

        <div class="content__text">
            <h2><?= $block->contentTitle() ?></h2>
            <p><?= $block->contentText() ?></p>

            <?php if ($block->contentBulletpoints()->isNotEmpty()) : ?>
                <ul class="list">
                    <?php foreach ($block->contentBulletpoints()->toStructure() as $bulletPoint) : ?>
                        <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> <?= $bulletPoint->bulletPoint() ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if ($block->contentButtons()->isNotEmpty()) : ?>
                <div class="buttons">
                    <?php foreach ($block->contentButtons()->toStructure() as $button) : ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if ($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif ($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>