<a class="button <?php echo ($button->typeOfButton()); if(isset($extraClass)) { echo $extraClass; } ?>"

    href="<?php if ($button->destination() == "internal") {
        echo ($button->internalPage()->toPage()->url() . $button->idPage());
    } elseif ($button->destination() == "external") {
        echo ($button->externalUrl());
    } elseif ($button->destination() == "call") {
        echo ("tel:" . $site->telephone());
    } elseif ($button->destination() == "email") {
        echo ("mailto:" . $site->email());
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
        <i class="anchor-first fa fa-arrow-right" aria-hidden="true"></i>
    <?php } elseif ($button->icon() == "arrowRightTop") { ?>
        <i class="anchor-first fa fa-arrow-right" style="transform: rotate(-45deg);"></i>
    <?php } elseif ($button->icon() == "arrowDown") { ?>
        <i class="anchor-first no-hover fa fa-arrow-down"></i><?php } ?>
</a>