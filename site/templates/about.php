<?php snippet('general/header') ?>

<!-- CONTAINER ABOUT -->
<div id="container" class="container container-about">

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
                    <div class="buttons">

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

        <!-- Scroll down -->
        <a class="scroll-down" href="<?= $site->url() ?>/about#history">
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </a>
    </header>



    <!-- HISTORY -->
    <?php if($page->historySwitch()->toBool()): ?>
        <section id="history" class="history section fade-section">
            <h2><?= $page->historyTitle() ?></h2>

            <!-- History numbers -->
            <?php if($page->history()->isNotEmpty()): ?>
                <div class="history__numbers">

                    <!-- number -->
                    <?php foreach($page->history()->toStructure() as $historyItem): ?>
                        <div class="history-item">
                            <h5 class="history-item__label"><?= $historyItem->title() ?></h5>
                            <h1 class="history-item__number counter <?php if($historyItem->withPlus() == "true") { echo("plus"); } ?>" data-target="<?= $historyItem->number() ?>"><?= $historyItem->number() ?></h1>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>



    <!-- CONTENT -->
    <?php if($page->contentSwitch()->toBool()): ?>
        <?php snippet('general/content') ?>
    <?php endif; ?>



    <!-- TEAM -->
    <?php if($page->teamSwitch()->toBool()): ?>
        <section class="team section fade-section">
            <div class="team__text">
                <h2><?= $page->teamTitle() ?></h2>
                <p><?= $page->teamText() ?></p>
            </div>

            <!-- Employees -->
            <?php if($page->team()->isNotEmpty()): ?>
                <div class="employees">

                    <!-- employee -->
                    <?php foreach($page->team()->toStructure() as $employee): ?>
                        <div class="employee">

                            <!-- image -->
                            <?php if($employee->image()->isNotEmpty()): ?>
                                <img class="employee__img" src="<?= $employee->image()->toFile()->url() ?>" alt="<?= $employee->image()->toFile()->alt() ?>" loading="lazy">
                            <?php endif; ?>

                            <h5><?= $employee->name() ?></h5>
                            <p><?= $employee->function() ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </section>
    <?php endif; ?>



    <!-- CTA -->
    <?php if($page->firstCtaSwitch()->toBool()): ?>
        <section id="cta-1" class="cta fade-section">
            <div class="cta__content">
                <h2><?= $page->firstCtaTitle() ?> <span><?= $page->firstCtaTitleSpan() ?></span></h2>

                <!-- CTA buttons -->
                <?php if($page->firstCtaButtons()->isNotEmpty()): ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach($page->firstCtaButtons()->toStructure() as $button): ?>
                            <?php snippet('components/button', ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/about/counter-animation.js', ['defer' => true]) ?>



<?php snippet('general/footer') ?>