<?php isset($block) ? $testimonialsContent = $block : $testimonialsContent = $page; ?>

<section id="testimonials" class="testimonials-section section fade-section">
    <div class="testimonials content-container-s content-container swiper">
        <h2><?= $testimonialsContent->testimonialsTitle() ?></h2>

        <?php if ($testimonialsContent->testimonials()->isNotEmpty()) : ?>
            <div class="testimonials-items swiper-wrapper">
                <?php foreach ($testimonialsContent->testimonials()->toStructure() as $testimonial) : ?>
                    <div class="testimonial swiper-slide">
                        <?php if ($testimonial->logo()->isNotEmpty()) : ?>
                            <img class="testimonial__logo" src="<?= $testimonial->logo()->toFile()->url() ?>" alt="<?= $testimonial->logo()->toFile()->alt() ?>" loading="lazy" />
                        <?php endif; ?>

                        <div class="testimonial__p">
                            <i class="quotes fa fa-quote-left" aria-hidden="true"></i>
                            <p><?= $testimonial->testimonial() ?></p>
                        </div>

                        <div class="testimonial__id flex">
                            <?php if ($testimonial->imageTestimonial()->isNotEmpty()) : ?>
                                <img class="testimonial__id__picture" src="<?= $testimonial->imageTestimonial()->toFile()->url() ?>" alt="<?= $testimonial->imageTestimonial()->toFile()->alt() ?>" loading="lazy" />
                            <?php endif; ?>

                            <div>
                                <h5 class="testimonial__id__name"><?= $testimonial->name() ?></h5>
                                <p class="testimonial__id__function"><?= $testimonial->function() ?></p>
                            </div>
                        </div>

                        <div class="arrows flex">
                            <div class="prev swiper-button-prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next swiper-button-next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="swiper-pagination"></div>
    </div>
</section>

<?= js("/build/js/swiper/index.js", ["defer" => true]) ?>