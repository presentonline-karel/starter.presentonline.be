<?php isset($block) ? $zigzagContent = $block : $zigzagContent = $page; ?>

<section class="zig-zag-section section fade-section">
    <div class="content-container-m content-container">
        <h2><?= $zigzagContent->zigzagTitle() ?></h2>

        <?php if($zigzagContent->zigzags()->isNotEmpty()): ?>
            <div class="zig-zag-container">

                <?php foreach($zigzagContent->zigzags()->toStructure() as $zigzag): ?>
                    <div class="zig-zag">
                        
                        <?php if($zigzagImage = $zigzag->zigzagImage()->toFile()): ?>
                            <?php snippet("helpers/image-builder", ["imageFile" => $zigzagImage, "pictureClass" => "zig-zag__img"]) ?>
                        <?php endif; ?>

                        <div class="zig-zag__content blocks">
                            <?php foreach ($zigzag->zigzagContent()->toBlocks() as $block) : ?>
                                <?= $block ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>