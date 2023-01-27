<?php isset($block) ? $imageCarouselContent = $block : $imageCarouselContent = $page; ?>

<section class="image-carousel-section section fade-section">
    <div class="content-container-l content-container">
        
        <!-- CTA -->
        <div class="flex-desktop">
            <h2><?= $imageCarouselContent->carouselTitle() ?></h2>

            <?php if ($imageCarouselContent->carouselCta()->isNotEmpty()) : ?>
                <?php foreach ($imageCarouselContent->carouselCta()->toStructure() as $button) : ?>
                    <?php snippet("components/button", ["button" => $button]) ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Carousel images -->
        <?php if ($imageCarouselContent->carouselImages()->isNotEmpty()) : ?>
            <div class="image-carousel__container">
                <?php if ($firstImage = $imageCarouselContent->carouselImages()->toFiles()->first()) : ?>
                    <div class="image-carousel__big-image">
                        <img class="image-carousel__big-image__img" src="<?= $firstImage->url() ?>" alt="<?= $firstImage->alt() ?>" loading="lazy" />
                        <div class="arrow-aria next"><i class="fa fa-chevron-right arrow" aria-hidden="true"></i></div>
                        <div class="arrow-aria prev"><i class="fa fa-chevron-left arrow" aria-hidden="true"></i></div>
                    </div>
                <?php endif; ?>

                <div class="image-carousel__thumbnails">
                    <?php foreach ($imageCarouselContent->carouselImages()->toFiles() as $carouselImage) : ?>
                        <img class="thumbnail" src="<?= $carouselImage->url() ?>" alt="<?= $carouselImage->alt() ?>" loading="lazy" />
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- CTA -->
        <?php if ($imageCarouselContent->carouselCta()->isNotEmpty()) : ?>
            <?php foreach ($imageCarouselContent->carouselCta()->toStructure() as $button) : ?>
                <?php snippet("components/button", ["button" => $button]) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?= js("build/js/components/image-carousel.js", ["defer" => true]) ?>