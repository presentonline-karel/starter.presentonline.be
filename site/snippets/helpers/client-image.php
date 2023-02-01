<?php if ($client->logo()->isNotEmpty()) : ?>
    <?php $imageFileName = $client->logo()->toFile()->filename(); ?>

    <!-- Image has an .svg extension -->
    <?php if (strpos($imageFileName, ".svg") !== false) : ?>
        <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo" loading="lazy">

        <!-- Image has an .jpg / .jpeg / .png extension  -->
    <?php else : ?>
        <?php
        $imageFullName = $client->logo()->toFile()->filename();
        $imageWebpExtension = substr($imageFullName, 0, strrpos($imageFullName, ".")) . ".webp";
        ?>

        <picture>
            <source srcSet="<?= $page->image($imageWebpExtension)->url() ?>" type="image/webp" />
            <source srcSet="<?= $client->logo()->toFile()->url() ?>" type="image/jpg" />
            <img src="<?= $client->logo()->toFile()->url() ?>" alt="<?= $client->logo()->toFile()->alt() ?>" loading="lazy" />
        </picture>
    <?php endif; ?>
<?php endif; ?>