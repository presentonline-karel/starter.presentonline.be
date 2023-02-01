<?php if ($testimonial->logo()->isNotEmpty()) : ?>
    <?php $imageFileName = $testimonial->logo()->toFile()->filename(); ?>

    <!-- Image has an .svg extension -->
    <?php if (strpos($imageFileName, ".svg") !== false) : ?>
        <img class="testimonial__logo" src="<?= $testimonial->logo()->toFile()->url() ?>" alt="<?= $testimonial->logo()->toFile()->alt() ?>" loading="lazy">

        <!-- Image has an .jpg / .jpeg / .png extension  -->
    <?php else : ?>
        <?php
        $imageFullName = $testimonial->logo()->toFile()->filename();
        $imageWebpExtension = substr($imageFullName, 0, strrpos($imageFullName, ".")) . ".webp";
        ?>

        <picture>
            <source srcSet="<?= $page->image($imageWebpExtension)->url() ?>" type="image/webp" />
            <source srcSet="<?= $testimonial->logo()->toFile()->url() ?>" type="image/jpg" />
            <img class="testimonial__logo" src="<?= $testimonial->logo()->toFile()->url() ?>" alt="<?= $testimonial->logo()->toFile()->alt() ?>" loading="lazy" />
        </picture>
    <?php endif; ?>
<?php endif; ?>