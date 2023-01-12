<?php
    if(isset($block)) {
        $faqsContent = $block;
    }
    else {
        $faqsContent = $page;
    }
?>

<section class="faqs">
    <div class="content-container-xs content-container">
        <?php foreach ($faqsContent->faqs()->toStructure() as $faq) : ?>
            <div class="faq accordion">
                <div class="faq__question accordion__header">
                    <h4 class="faq__question__title title"><?= $faq->question() ?></h4>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                </div>

                <div class="faq__answer accordion__content">
                    <p class="faq__answer__p">
                        <?= $faq->answer() ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>

        <a class="button-primary" href="<?= $site->url() ?>/home">Home <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>
</section>

<?= js("build/js/faq/accordion.js", ["defer" => true]) ?>