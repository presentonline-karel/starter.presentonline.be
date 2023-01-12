<?php
    if(isset($block)) {
        $heroBigImageContent = $block;
    }
    else {
        $heroBigImageContent = $page;
    }
?>

<header id="header" class="header header-home">
    <?php snippet("general/nav", ["extraClass" => "nav-home"]) ?>

    <div class="header-home__content">
        <div class="header-home__content__text">
            <h1><?= $heroBigImageContent->heroTitle() ?><br> <span><?= $heroBigImageContent->heroTitleSpan() ?></span></h1>
            <p><?= $heroBigImageContent->heroIntro() ?></p>

            <?php if ($heroBigImageContent->heroButtons()->isNotEmpty()) : ?>
                <div class="buttons <?php if(count($heroBigImageContent->heroButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                    <?php foreach ($heroBigImageContent->heroButtons()->toStructure() as $button) : ?>
                        <?php snippet("components/button", ["button" => $button]) ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($heroBigImageContent->heroImage()->isNotEmpty()) : ?>
            <div class="header__content__image">
                <img src="<?= $heroBigImageContent->heroImage()->toFile()->thumb(["format" => "webp"])->url() ?>" alt="<?= $heroBigImageContent->heroImage()->toFile()->alt() ?>">
            </div>
        <?php endif; ?>
    </div>

    <a class="scroll-down" href="<?= $site->url() ?>/home#page-sections">
        <i class="fa fa-chevron-down" aria-hidden="true"></i>
    </a>
</header>