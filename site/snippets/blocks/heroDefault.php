<header class="header header-about">
    <?php snippet('general/nav') ?>

    <div class="header__content">
        <div class="header__content__text">
            <h1><?= $block->heroTitle() ?></h1>
            <p><?= $block->heroIntro() ?></p>

            <?php if ($block->heroButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($block->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($block->heroButtons()->toStructure() as $button) : ?>
                        <?php snippet('components/button', ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($block->heroImage()->isNotEmpty()) : ?>
            <img class="header-about__content__image" src="<?= $block->heroImage()->toFile()->url() ?>" alt="<?= $block->heroImage()->toFile()->alt() ?>">
        <?php endif; ?>
    </div>

    <?php if ($block->heroImage()->isNotEmpty()) : ?>
        <div class="header__content__image">
            <img src="<?= $block->heroImage()->toFile()->url() ?>" alt="<?= $block->heroImage()->toFile()->alt() ?>">
        </div>
    <?php endif; ?>

    <a class="scroll-down" href="<?= $site->url() ?>/about#history">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </a>
</header>