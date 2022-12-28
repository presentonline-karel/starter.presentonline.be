<?php
    if(isset($block)) {
        $testimonialsContent = $block;
    }
    else {
        $testimonialsContent = $page;
    }
?>

<section id="testimonials" class="testimonials-section section fade-section">
    <div class="testimonials content-container-s content-container">
        <h2><?= $testimonialsContent->testimonialsTitle() ?></h2>

        <?php if ($testimonialsContent->testimonials()->isNotEmpty()) : ?>
            <div class="testimonials-items">
                <?php foreach ($testimonialsContent->testimonials()->toStructure() as $testimonial) : ?>
                    <div class="slide-container testimonial">
                        <?php if ($testimonial->logo()->isNotEmpty()) : ?>
                            <img class="testimonial__logo" src="<?= $testimonial->logo()->toFile()->url() ?>" alt="<?= $testimonial->logo()->toFile()->alt() ?>" loading="lazy" />
                        <?php endif; ?>

                        <i class="quotes fa fa-quote-left" aria-hidden="true"></i>
                        <p class="testimonial__p"><?= $testimonial->testimonial() ?></p>

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
                            <div class="prev">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                            </div>
                            <div class="next">
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="bullets">
                <?php foreach ($testimonialsContent->testimonials()->toStructure() as $testimonial) : ?>
                    <div class="bullet"></div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= js('build/js/home/testimonials-slider.js', ['defer' => true]) ?>