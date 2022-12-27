<header id="header" class="header header-home">
    <?php snippet('general/nav', ['extraClass' => 'nav-home']) ?>

    <div class="header-home__content">
        <div class="header-home__content__text">
            <h1><?= $block->heroTitle() ?><br> <span><?= $block->heroTitleSpan() ?></span></h1>
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
            <div class="header__content__image">
                <img src="<?= $block->heroImage()->toFile()->thumb(['format' => 'webp'])->url() ?>" alt="<?= $block->heroImage()->toFile()->alt() ?>">
            </div>
        <?php endif; ?>
    </div>

    <a class="scroll-down" href="<?= $site->url() ?>/home#home-sections">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </a>
</header>