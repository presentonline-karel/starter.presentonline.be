<!-- USP-BAR -->
<?php if ($site->uspSwitch()->toBool()) : ?>
    <div class="usp-bar swiper">
        <?php if ($site->uspItems()->isNotEmpty()) : ?>
            <div class="swiper-wrapper">
                <?php foreach ($site->uspItems()->toStructure() as $usp) : ?>
                    <div class="usp swiper-slide">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <span class="usp__text"><?= $usp->usp() ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <?= js("/build/js/swiper/usp-bar.js", ["defer" => true]) ?>
<?php endif; ?>