<header class="header header-blog">
    <?php snippet('general/nav') ?>

    <div class="header__content">
        <div class="header__content__text">
            <div class="content-container-s content-container">
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
        </div>
    </div>
</header>