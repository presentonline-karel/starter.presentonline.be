<?php $imageFileName = $imageFile->filename(); ?>

<!-- Image has an .svg extension -->
<?php if (strpos($imageFileName, ".svg") !== false) : ?>
    <img src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy">

<!-- Image has an .jpg / .jpeg / .png extension  -->
<?php else : ?>
    <?php
    $imageWebpFile = substr($imageFileName, 0, strrpos($imageFileName, ".")) . ".webp";
    ?>

    <picture>
        <source srcSet="<?= $page->image($imageWebpFile)->url() ?>" type="image/webp" />
        <source srcSet="<?= $imageFile->url() ?>" type="image/jpg" />
        <img <?php if(isset($class)) { echo($class); } ?> src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy" />
    </picture>
<?php endif; ?>