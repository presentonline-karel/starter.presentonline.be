<?php
    if(isset($block)) {
        $textWithImageContent = $block;
    }
    else {
        $textWithImageContent = $page;
    }
?>

<section class="content-section fade-section">
    <div class="content content-container-l content-container r-106">
        <?php if($textWithImageContent->contentImage()->isNotEmpty()): ?>
            <div class="content__image">
                <img src="<?= $textWithImageContent->contentImage()->toFile()->url() ?>" alt="<?= $textWithImageContent->contentImage()->toFile()->alt() ?>" loading="lazy">
            </div>
        <?php endif; ?>

        <div class="content__text">
            <h2><?= $textWithImageContent->contentTitle() ?></h2>
            <p><?= $textWithImageContent->contentText() ?></p>

            <?php if ($textWithImageContent->contentBulletpoints()->isNotEmpty()) : ?>
                <ul class="list">
                    <?php foreach ($textWithImageContent->contentBulletpoints()->toStructure() as $bulletPoint) : ?>
                        <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> <?= $bulletPoint->bulletPoint() ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if ($textWithImageContent->contentButtons()->isNotEmpty()) : ?>
                <div class="buttons">
                    <?php foreach ($textWithImageContent->contentButtons()->toStructure() as $button) : ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if ($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif ($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>