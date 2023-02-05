<nav class="nav <?php if($page->title() == "Home") { echo("nav-home"); } ?> flex <?php if(isset($extraClass)) { echo($extraClass); } ?>">
    <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
        <?php if ($site->logoDark()->isNotEmpty() && $site->logoLight()->isNotEmpty()) : ?>
            <img class="nav-links__top__logo logoDark" src="<?= $site->logoDark()->toFile()->url() ?>" alt="<?= $site->logoDark()->toFile()->alt() ?>" />
            <img class="nav-links__top__logo logoLight" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
        <?php endif; ?>
    </a>



    <!-- Sliding nav -->
    <div class="nav-links">
        <?php if ($site->logoLight()->isNotEmpty()) : ?>
            <a class="logo" href="<?= $site->url() ?>" aria-label="Home">
                <img class="nav-links__top__logo mobile" src="<?= $site->logoLight()->toFile()->url() ?>" alt="<?= $site->logoLight()->toFile()->alt() ?>" />
            </a>
        <?php endif; ?>

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
            <?php foreach($site->ctaButton()->toStructure() as $button): ?>
                <?php snippet("components/button", ["button" => $button, "extraClass" => " button-white mobile"]) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>



    <!-- Primary CTA desktop -->
    <?php if($site->ctaButton()->isNotEmpty()): ?>
        <?php foreach($site->ctaButton()->toStructure() as $button): ?>
            <?php snippet("components/button", ["button" => $button, "extraClass" => " primary-cta desktop"]) ?>
        <?php endforeach; ?>
    <?php endif; ?>



    <!-- Light/dark mode switch -->
    <?php if($site->lightDarkModeSwitch() == "lightDarkMode"): ?>
        <div class="theme-switch">
            <div class="theme-switch__icon-container">
                <i class="sun fa fa-sun-o" aria-hidden="true"></i>
                <i class="moon fa fa-moon-o" aria-hidden="true"></i>
            </div>
        </div>
    <?php endif; ?>



    <!-- Burger -->
    <div class="burger">
        <div class="burger-line line1"></div>
        <div class="burger-line line2"></div>
        <div class="burger-line line3"></div>
    </div>
</nav>