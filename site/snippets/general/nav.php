<!-- NAV DARK -->
<nav class="nav nav-dark flex">

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

        <!-- Free quotation button mobile -->
        <a class="button button-primary button-white mobile" href="<?= $site->url() ?>/contact">Gratis offerte <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>



    <!-- Free quotation button desktop -->
    <a class="button button-primary quotation-button desktop" href="<?= $site->url() ?>/contact">Gratis offerte</a>



    <!-- Menu burger/cross -->
    <div class="burger dark">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</nav>