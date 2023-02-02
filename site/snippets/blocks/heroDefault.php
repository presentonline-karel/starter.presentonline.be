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

        <?php if($heroImage = $heroDefaultContent->heroImage()->toFile()): ?>
            <?php snippet("helpers/image-builder", ["imageFile" => $heroImage, "pictureClass" => "header-about__content__image"]) ?>
        <?php endif; ?>
    </div>

    <?php if($heroImage = $heroDefaultContent->heroImage()->toFile()): ?>
        <div class="header__content__image">
            <?php snippet("helpers/image-builder", ["imageFile" => $heroImage]) ?>
        </div>
    <?php endif; ?>

    <?php snippet("helpers/scroll-to-here") ?>
</header>