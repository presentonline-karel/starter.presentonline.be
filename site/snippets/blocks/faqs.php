<section class="faqs">
    <div class="content-container-xs content-container">
        <?php foreach ($block->faqs()->toStructure() as $faq) : ?>
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

        <a class="button-primary" href="<?= $site->url() ?>/home">Home <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
</section>

<?= js('build/js/faq/accordion.js', ['defer' => true]) ?>