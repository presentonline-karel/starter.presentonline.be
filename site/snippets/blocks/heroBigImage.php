<?php isset($block) ? $heroBigImageContent = $block : $heroBigImageContent = $page; ?>

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
                <?php
                    $imageFullName = $heroBigImageContent->heroImage()->toFile()->filename();
                    $imageWebpExtension = substr($imageFullName, 0, strrpos($imageFullName, ".")) . ".webp";
                ?>

                <picture>
                    <source srcSet="<?= $page->image($imageWebpExtension)->url() ?>" type="image/webp" />
                    <source srcSet="<?= $heroBigImageContent->heroImage()->toFile()->url() ?>" type="image/jpg" />
                    <img src="<?= $heroBigImageContent->heroImage()->toFile()->url() ?>" alt="<?= $heroBigImageContent->heroImage()->toFile()->alt() ?>" loading="lazy" />
                </picture>
            </div>
        <?php endif; ?>
    </div>

    <?php snippet("helpers/scroll-to-here") ?>
</header>