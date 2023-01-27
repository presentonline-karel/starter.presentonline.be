<?php isset($block) ? $tabsContent = $block : $tabsContent = $page; ?>

<section class="tabs-section section fade-section">
    <div class="content-container-m content-container">
        <h2><?= $tabsContent->tabsTitle() ?></h2>

        <?php if($tabsContent->tabs()->isNotEmpty()): ?>
            <div class="tabs-container">
                <div class="tabs">
                    <?php foreach($tabsContent->tabs()->toStructure() as $tab): ?>
                        <div class="tab"><?= $tab->title() ?></div>
                    <?php endforeach; ?>
                </div>

                <div class="tab-content-container">
                    <?php foreach($tabsContent->tabs()->toStructure() as $tab): ?>
                        <div class="tab-content blocks">
                            <?php foreach ($tab->tabContent()->toBlocks() as $block) : ?>
                                <?= $block ?>
                            <?php endforeach; ?>
                        </div>

                        <!-- Hidden placeholder tabs for dynamic height -->
                        <div class="helper-tab-content blocks">
                            <?php foreach ($tab->tabContent()->toBlocks() as $block) : ?>
                                <?= $block ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= js("build/js/components/tabs.js", ["defer" => true]) ?>