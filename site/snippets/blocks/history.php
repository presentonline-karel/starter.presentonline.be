<?php isset($block) ? $historyContent = $block : $historyContent = $page; ?>

<section class="history section fade-section">
    <div class="content-container-m content-container">
        <h2><?= $historyContent->historyTitle() ?></h2>

        <?php if ($historyContent->history()->isNotEmpty()) : ?>
            <div class="history__numbers">
                <?php foreach ($historyContent->history()->toStructure() as $historyItem) : ?>
                    <div class="history-item">
                        <h5 class="history-item__label"><?= $historyItem->title() ?></h5>
                        <h1 class="history-item__number counter <?php if ($historyItem->withPlus() == "true") { echo ("plus"); } ?>" data-target="<?= $historyItem->number() ?>"><?= $historyItem->number() ?></h1>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= js("build/js/about/counter-animation.js", ["defer" => true]) ?>