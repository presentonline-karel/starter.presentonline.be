<!-- NAV DARK -->
<nav class="nav <?php if($page->title() == "Home") { echo("nav-home"); } ?> flex">

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

        <!-- Primary CTA -->
        <a class="button button-primary button-white mobile" href="<?= $site->url() ?>/contact">Gratis offerte <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </div>



    <!-- Primary CTA -->
    <?php if($page->title() != "Home"): ?>
        <a class="button button-primary primary-cta desktop" href="<?= $site->url() ?>/contact">Gratis offerte</a>
    <?php endif; ?>



    <!-- Menu burger/cross -->
    <div class="burger">
        <div class="burger-line line1"></div>
        <div class="burger-line line2"></div>
        <div class="burger-line line3"></div>
    </div>
</nav>