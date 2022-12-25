<?php snippet('general/header') ?>

<!-- CONTAINER ABOUT -->
<div id="container" class="container container-thank-you">

    <!-- HEADER ABOUT -->
    <header class="header header-about">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER ABOUT - CONTENT -->
        <div class="header__content">
            <div class="header__content__text">
                <h1><?= $page->heroTitle() ?></h1>
                <p><?= $page->heroIntro() ?></p>

                <!-- Hero buttons -->
                <?php if($page->heroButtons()->isNotEmpty()): ?>
                    <div class="buttons <?php if(count($page->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">

                        <!-- button -->
                        <?php foreach($page->heroButtons()->toStructure() as $button): ?>
                            <?php snippet('components/button', ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Hero image -->
            <?php if($page->heroImage()->isNotEmpty()): ?>
                <img class="header-about__content__image" src="<?= $page->heroImage()->toFile()->url() ?>" alt="<?= $page->heroImage()->toFile()->alt() ?>">
            <?php endif; ?>
        </div>

        <!-- Hero image -->
        <?php if($page->heroImage()->isNotEmpty()): ?>
            <div class="header__content__image">
                <img src="<?= $page->heroImage()->toFile()->url() ?>" alt="<?= $page->heroImage()->toFile()->alt() ?>">
            </div>
        <?php endif; ?>
    </header>
</div>

<?php snippet('general/footer') ?>