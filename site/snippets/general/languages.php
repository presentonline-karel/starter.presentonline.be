<div class="languages">
    <?php foreach ($kirby->languages() as $language) : ?>
        <a <?php e($kirby->language() == $language, ' class="language-button active"') ?> class="language-button" href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
            <?= html($language->code()) ?>
        </a>
    <?php endforeach ?>
</div>