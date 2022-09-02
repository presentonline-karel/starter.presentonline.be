<section id="content" class="content">

    <!-- Content image -->
    <div class="content__image">
        <img src="<?= $site->url() ?>/assets/img/header.jpg" alt="header image">
    </div>

    <!-- Content text -->
    <div class="content__text">
        <h2><?= $page->contentTitle() ?></h2>
        <p><?= $page->contentText() ?></p>

        <!-- content bulletpoints -->
        <?php if ($page->contentBulletpoints()->isNotEmpty()) : ?>
            <ul class="list">

                <!-- bulletpoint -->
                <?php foreach ($page->contentBulletpoints()->toStructure() as $bulletPoint) : ?>
                    <li class="list__item"><i class="icon-first fa fa-chevron-right" aria-hidden="true"></i> <?= $bulletPoint->bulletPoint() ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- content buttons -->
        <?php if ($page->contentButtons()->isNotEmpty()) : ?>
            <div class="buttons">

                <!-- button -->
                <?php foreach ($page->contentButtons()->toStructure() as $button) : ?>
                    <a class="button <?= $button->typeOfButton() ?>" href="<?php if ($button->destination() == "internal") { echo ($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo ($button->externalUrl()); } ?>" <?php if ($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if ($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif ($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>