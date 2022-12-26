<a class="button <?= $block->typeOfButton() ?>"

    href="<?php if ($block->destination() == "internal") {
        echo ($block->internalPage()->toPage()->url() . $block->idPage());
    } else {
        echo ($block->externalUrl());
    } ?>"
    
    <?php if ($block->destination() == "external") {
        ?> target="_blank" <?php
    } ?>>
    
    <?= $block->anchor() ?>
    
    <?php if ($block->icon() == "chevronRight") { ?>
        <i class="anchor-first fa fa-chevron-right"></i>
    <?php } elseif ($block->icon() == "chevronDown") { ?>
        <i class="anchor-first no-hover fa fa-chevron-down"></i>
    <?php } elseif ($block->icon() == "arrowRight") { ?>
        <i class="anchor-first fa-solid fa-arrow-right"></i>
    <?php } elseif ($block->icon() == "arrowRightTop") { ?>
        <i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i>
    <?php } elseif ($block->icon() == "arrowDown") { ?>
        <i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?>
</a>