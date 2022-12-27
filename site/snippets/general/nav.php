<!-- NAV DARK -->
<nav class="nav <?php if($page->title() == "Home") { echo("nav-home"); } ?> flex <?php if(isset($extraClass)) { echo($extraClass); } ?>">

    <!-- Nav logo -->
    <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
        <?php if ($site->logoLight()->isNotEmpty()) : ?>
            <img class="nav-links__top__logo" src="<?= $site->logoDark()->toFile()->url() ?>" alt="<?= $site->logoDark()->toFile()->alt() ?>" />
        <?php endif; ?>
    </a>



    <!-- Sliding nav -->
    <div class="nav-links">

        <!-- logo -->
        <?php if ($site->logoLight()->isNotEmpty()) : ?>
            <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
                <img class="nav-links__top__logo mobile" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
            </a>
        <?php endif; ?>

        <!-- menu items -->
        <?php if ($site->navigationLinks()->isNotEmpty()) : ?>
            <ul class="link-items">
                <?php foreach ($site->navigationLinks()->toStructure() as $link) : ?>
                    <li class="nav__link">
                        <a class="nav__link__item <?php if ($link->page()->toPage()->isOpen()) { echo ("active"); } ?>" href="<?= $link->page()->toPage()->url() . $link->section() ?>"><?= $link->anchor() ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <!-- Primary CTA mobile -->
        <?php if($site->ctaButton()->isNotEmpty()): ?>

            <!-- button -->
            <?php foreach($site->ctaButton()->toStructure() as $button): ?>
                <a class="button button-white mobile <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>



    <!-- Primary CTA -->
    <?php //if($page->title() != "Home"): ?>
        <?php if($site->ctaButton()->isNotEmpty()): ?>

            <!-- button -->
            <?php foreach($site->ctaButton()->toStructure() as $button): ?>
                <a class="button primary-cta desktop <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    <?php //endif; ?>



    <!-- Menu burger/cross -->
    <div class="burger">
        <div class="burger-line line1"></div>
        <div class="burger-line line2"></div>
        <div class="burger-line line3"></div>
    </div>
</nav>