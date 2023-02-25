<?php $imageFileName = $imageFile->filename(); ?>
<?php $imageFileNameWithoutExtension = substr($imageFileName, 0, strrpos($imageFileName, ".")); ?><!-- image filename without extension -->
<?php $extension = $imageFile->extension() ?>



<!-- Image has an .svg extension -->
<?php if (strpos($imageFileName, ".svg") !== false) : ?>
    <img <?php if(isset($class)) { ?> class="<?= $class ?>" <?php } ?> src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy">

<!-- Image has an .jpg / .jpeg / .png / .webp extension  -->
<?php else : ?>
    <?php

    // Choosen image is jpg/png/jpeg -> use that one as default
    if($extension === "jpg" || $extension === "jpeg" || $extension === "png") {

        //set jpg file
        $imageJpegFile = $imageFile;

        //set webp file
        $imageWebpFileName = substr($imageFileName, 0, strrpos($imageFileName, ".")) . ".webp";
        isset($article) ? $imageWebpFile = $article->image($imageWebpFileName) : $imageWebpFile = $page->image($imageWebpFileName);
    }

    // Choosen image is webp/... -> look for jpg/png/jpeg version as default -> [Atm user should only be able to select jpg / jpeg / svg / png]
    else {

        //set jpg file
        $imagesWithThisFileName = $page->files()->filterBy('filename', '*=', $imageFileNameWithoutExtension);
        $imageJpegFile = $imagesWithThisFileName->filterBy('extension', '!=', 'webp');

        //set webp file
        $imageWebpFile = $imageFile;
    }
    ?>

    <picture <?php if(isset($pictureClass)) { ?> class="<?= $pictureClass ?>" <?php } ?>>
        <source <?php if(isset($classSourceWebp)) { ?> class="<?= $classSourceWebp ?>" <?php } ?> srcSet="<?= $imageWebpFile->url() ?>" type="image/webp" />
        <source <?php if(isset($classSourceJpg)) { ?> class="<?= $classSourceJpg ?>" <?php } ?> srcSet="<?= $imageJpegFile->url() ?>" type="image/jpg" />
        <img <?php if(isset($class)) { ?> class="<?= $class ?>" <?php } ?> src="<?= $imageJpegFile->url() ?>" alt="<?= $imageJpegFile->alt() ?>" loading="lazy" />
    </picture>
<?php endif; ?>