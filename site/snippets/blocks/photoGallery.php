<?php /* <section id="gallery" class="photoGallery-section section">
    <div class="photoGallery content-container-l content-container">
        <h2 class="photoGallery__title"><?= $block->photoGalleryTitle() ?></h2>

        <div class="photoGallery__images">
            <?php if($block->photoGallery()->isNotEmpty()): ?>
                <?php
                    $photos = $block->photoGallery()->toFiles();
                    $photosArray = $block->photoGallery()->toArray();
                    $amountOfPhotos = count($photos);
                    $linesOfPhotos = ceil($amountOfPhotos / 3);

                    $index = 0;
                ?>

                <?php while($index < count($photosArray)): ?>
                    <?php for ($i = 0; $i < $linesOfPhotos; $i++): ?>
                        <?php var_dump($index); ?>
                        <?php var_dump($photos["photogallery"][0]->toFile()); ?>

                        <div class="grid-column">
                            <img class="photo" src="<?= $photos[$index]->toFile()->url() ?>" alt="<?= $photos[$index]->toFile()->alt() ?>" loading="lazy">
                            <?php $index++; ?>
                        </div>

                        <?php $index++; ?>
                    <?php endfor; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
*/ ?>