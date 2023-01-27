<?php isset($block) ? $stepsContent = $block : $stepsContent = $page; ?>

<section id="steps" class="steps-section section fade-section">
    <div class="content-container-l content-container">
        <h2 class="steps-section__title"><?= $stepsContent->stepsTitle() ?></h2>
        <p class="steps-section__intro"><?= $stepsContent->stepsParagraph() ?></p>

        <?php if($stepsContent->steps()->isNotEmpty()): ?>
            <div class="steps swiper">
                <div class="swiper-wrapper">
                    <?php $numberHelper = 1; ?>

                    <?php foreach($stepsContent->steps()->toStructure() as $step): ?>
                        <div class="step swiper-slide">
                            <span class="step__number"><?= $numberHelper ?></span>

                            <h4 class="step__title"><?= $step->title() ?></h4>
                            <p class="step__description"><?= $step->paragraph() ?></p>
                        </div>

                        <?php $numberHelper++; ?>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= js("/build/js/swiper/steps.js", ["defer" => true]) ?>