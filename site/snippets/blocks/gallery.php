<section id="gallery" class="gallery-section section">
    <div class="gallery content-container-m content-container">
        <h2>Enkele sfeerbeelden</h2>

        <?php foreach ($page->gallery()->toLayouts() as $layout): ?>
            <div id="layout" class="layout">
                <?php foreach ($layout->columns() as $column): ?>
                    <div class="column" style="--span:<?= $column->span() ?>">
                        <div class="blocks">
                            <?= $column->blocks() ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </section>
        <?php endforeach ?>
    </div>
</section>