<?php isset($block) ? $uspBarContent = $block : $uspBarContent = $page; ?>

<div class="usp-bar swiper">
    <?php if($uspBarContent->uspItems()->isNotEmpty()): ?>
        <div class="swiper-wrapper">
            <?php foreach ($uspBarContent->uspItems()->toStructure() as $usp) : ?>
                <div class="usp swiper-slide">
                    <i class="fa fa-check" aria-hidden="true"></i>
                    <span class="usp__text"><?= $usp->usp() ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>

<?= js("/build/js/swiper/usp-bar.js", ["defer" => true]) ?>