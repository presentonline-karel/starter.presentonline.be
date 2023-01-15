<a class="button <?php echo ($button->typeOfButton()); if(isset($extraClass)) { echo $extraClass; } ?>"

    href="<?php if ($button->destination() == "internal") {
        echo ($button->internalPage()->toPage()->url() . $button->idPage());
    } else {
        echo ($button->externalUrl());
    } ?>"
    
    <?php if ($button->destination() == "external") {
        ?> target="_blank" <?php
    } ?>>
    
    <?= $button->anchor() ?>
    
    <?php if ($button->icon() == "chevronRight") { ?>
        <i class="anchor-first fa fa-chevron-right"></i>
    <?php } elseif ($button->icon() == "chevronDown") { ?>
        <i class="anchor-first no-hover fa fa-chevron-down"></i>
    <?php } elseif ($button->icon() == "arrowRight") { ?>
        <i class="anchor-first fa-solid fa-arrow-right"></i>
    <?php } elseif ($button->icon() == "arrowRightTop") { ?>
        <i class="anchor-first fa-solid fa-arrow-right" style="transform: rotate(-45deg);"></i>
    <?php } elseif ($button->icon() == "arrowDown") { ?>
        <i class="anchor-first no-hover fa-solid fa-arrow-down"></i><?php } ?>
</a>