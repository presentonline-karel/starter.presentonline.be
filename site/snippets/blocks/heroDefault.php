<?php isset($block) ? $heroDefaultContent = $block : $heroDefaultContent = $page; ?>

<header class="header header-about">
    <?php snippet("general/nav") ?>

    <div class="header__content">
        <div class="header__content__text">
            <h1><?= $heroDefaultContent->heroTitle() ?></h1>
            <p><?= $heroDefaultContent->heroIntro() ?></p>

            <?php if ($heroDefaultContent->heroButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($heroDefaultContent->heroButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($heroDefaultContent->heroButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($heroDefaultContent->heroImage()->isNotEmpty()) : ?>
            <img class="header-about__content__image" src="<?= $heroDefaultContent->heroImage()->toFile()->url() ?>" alt="<?= $heroDefaultContent->heroImage()->toFile()->alt() ?>">
        <?php endif; ?>
    </div>

    <?php if ($heroDefaultContent->heroImage()->isNotEmpty()) : ?>
        <div class="header__content__image">
            <img src="<?= $heroDefaultContent->heroImage()->toFile()->url() ?>" alt="<?= $heroDefaultContent->heroImage()->toFile()->alt() ?>">
        </div>
    <?php endif; ?>

    <a class="scroll-down" href="<?= $page->url() ?>/#scroll-to-here">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </a>
</header>

<div id="scroll-to-here"></div>