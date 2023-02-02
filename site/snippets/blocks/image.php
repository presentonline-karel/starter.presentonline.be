<?php
// !IMPORTANT! --- Overwrite default Kirby image block -> WATCH OUT --- !IMPORTANT!

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src()->esc();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}
?>

<?php if ($src) : ?>
    <figure<?= Html::attr(['data-ratio' => $ratio, 'data-crop' => $crop], null, ' ') ?>>
        <?php if ($link->isNotEmpty()) : ?>
            <a href="<?= Str::esc($link->toUrl()) ?>">
            
                <?php if (strpos($src, ".svg") !== false) : ?>
                    <img src="<?= $src ?>" alt="<?= $alt->esc() ?>" loading="lazy">

                <?php else : ?>
                    <?php
                    $imageBlockFileName = $block->image()->toFile()->filename();
                    $imageBlockWebpFileName = substr($imageBlockFileName, 0, strrpos($imageBlockFileName, ".")) . ".webp";
                    $imageWebpFile = $page->image($imageBlockWebpFileName);
                    ?>

                    <picture>
                        <source srcSet="<?= $imageWebpFile->url() ?>" type="image/webp" />
                        <source srcSet="<?= $src ?>" type="image/jpg" />
                        <img src="<?= $src ?>" alt="<?= $alt->esc() ?>" loading="lazy" />
                    </picture>
                <?php endif; ?>
            </a>

        <?php else : ?>

            <?php if (strpos($src, ".svg") !== false) : ?>
                <img src="<?= $src ?>" alt="<?= $alt->esc() ?>" loading="lazy">

            <?php else : ?>
                <?php
                $imageBlockFileName = $block->image()->toFile()->filename();
                $imageBlockWebpFileName = substr($imageBlockFileName, 0, strrpos($imageBlockFileName, ".")) . ".webp";
                $imageWebpFile = $page->image($imageBlockWebpFileName);
                ?>

                <picture>
                    <source srcSet="<?= $imageWebpFile->url() ?>" type="image/webp" />
                    <source srcSet="<?= $src ?>" type="image/jpg" />
                    <img src="<?= $src ?>" alt="<?= $alt->esc() ?>" loading="lazy" />
                </picture>
            <?php endif; ?>
        <?php endif ?>

        <?php if ($caption->isNotEmpty()) : ?>
            <figcaption>
                <?= $caption ?>
            </figcaption>
        <?php endif ?>
    </figure>
<?php endif ?>