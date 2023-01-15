<?php isset($block) ? $heroNoImageContent = $block : $heroNoImageContent = $page; ?>

<header class="header header-blog">
    <?php snippet("general/nav") ?>

    <div class="header__content">
        <div class="header__content__text">
            <div class="content-container-s content-container">
                <h1><?= $heroNoImageContent->heroTitle() ?></h1>
                <p><?= $heroNoImageContent->heroIntro() ?></p>

                <?php if ($heroNoImageContent->heroButtons()->isNotEmpty()) : ?>
                    <div class="buttons <?php if(count($heroNoImageContent->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                        <?php foreach ($heroNoImageContent->heroButtons()->toStructure() as $button) : ?>
                            <?php snippet("components/button", ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>