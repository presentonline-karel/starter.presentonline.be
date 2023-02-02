<?php $imageFileName = $imageFile->filename(); ?>

<!-- Image has an .svg extension -->
<?php if (strpos($imageFileName, ".svg") !== false) : ?>
    <img <?php if(isset($class)) { ?> class="<?= $class ?>" <?php } ?> src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy">

<!-- Image has an .jpg / .jpeg / .png / .webp extension  -->
<?php else : ?>
    <?php
    $imageWebpFileName = substr($imageFileName, 0, strrpos($imageFileName, ".")) . ".webp";
    isset($article) ? $imageWebpFile = $article->image($imageWebpFileName) : $imageWebpFile = $page->image($imageWebpFileName);
    ?>

    <picture <?php if(isset($pictureClass)) { ?> class="<?= $pictureClass ?>" <?php } ?>>
        <source <?php if(isset($classSourceWebp)) { ?> class="<?= $classSourceWebp ?>" <?php } ?> srcSet="<?= $imageWebpFile->url() ?>" type="image/webp" />
        <source <?php if(isset($classSourceJpg)) { ?> class="<?= $classSourceJpg ?>" <?php } ?> srcSet="<?= $imageFile->url() ?>" type="image/jpg" />
        <img <?php if(isset($class)) { ?> class="<?= $class ?>" <?php } ?> src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy" />
    </picture>
<?php endif; ?>