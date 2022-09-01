<?php snippet('general/header') ?>

<!-- CONTAINER FAQ -->
<div id="container" class="container container-faq">

    <!-- HEADER FAQ -->
    <header class="header header-faq">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER FAQ - CONTENT -->
        <div class="header-faq__content">
            <h1><?= $page->heroTitle() ?></h1>
            <p><?= $page->heroIntro() ?></p>
        </div>
    </header>



    <!-- FAQs -->
    <?php if ($page->faqs()->isNotEmpty()) : ?>
        <main class="faqs">

            <!-- faq -->
            <?php foreach ($page->faqs()->toStructure() as $faq) : ?>
                <div class="faq">
                    <div class="faq__question">
                        <h4 class="faq__question__title"><?= $faq->question() ?></h4>
                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    </div>

                    <div class="faq__answer">
                        <p class="faq__answer__p">
                            <?= $faq->answer() ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Button - Back home -->
            <a class="button-primary" href="<?= $site->url() ?>/home">Home <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </main>
    <?php endif; ?>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/faq/accordion.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>