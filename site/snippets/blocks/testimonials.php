<?php isset($block) ? $testimonialsContent = $block : $testimonialsContent = $page; ?>

<section id="testimonials" class="testimonials-section section fade-section">
    <div class="testimonials content-container-s content-container swiper">
        <h2><?= $testimonialsContent->testimonialsTitle() ?></h2>

        <?php if ($testimonialsContent->testimonials()->isNotEmpty()) : ?>
            <div class="testimonials-items swiper-wrapper">

                <?php foreach ($testimonialsContent->testimonials()->toStructure() as $testimonial) : ?>
                    <div class="testimonial swiper-slide">

                        <?php if($testimonialLogo = $testimonial->logo()->toFile()): ?>
                            <?php snippet("helpers/image-builder", ["imageFile" => $testimonialLogo, "class" => "testimonial__logo"]) ?>
                        <?php endif; ?>

                        <div class="testimonial__p">
                            <i class="quotes fa fa-quote-left" aria-hidden="true"></i>
                            <p><?= $testimonial->testimonial() ?></p>
                        </div>

                        <div class="testimonial__id flex">
                            
                            <?php if($testimonialImage = $testimonial->imageTestimonial()->toFile()): ?>
                                <?php snippet("helpers/image-builder", ["imageFile" => $testimonialImage, "class" => "testimonial__id__picture"]) ?>
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

<?= js("/build/js/swiper/testimonials.js", ["defer" => true]) ?>