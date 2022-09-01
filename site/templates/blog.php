<?php snippet('general/header') ?>

<!-- CONTAINER BLOG -->
<div id="container" class="container container-blog">

    <!-- HEADER BLOG -->
    <header class="header header-blog">

        <!-- NAV -->
        <?php snippet('general/nav') ?>

        <!-- HEADER BLOG - CONTENT -->
        <div class="header__content">
            <div class="header__content__text">
                <h1><?= $page->heroTitle() ?></h1>
                <p><?= $page->heroIntro() ?></p>

                <!-- Hero buttons -->
                <?php if($page->heroButtons()->isNotEmpty()): ?>
                    <div class="buttons">

                        <!-- button -->
                        <?php foreach($page->heroButtons()->toStructure() as $button): ?>
                            <a class="button <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>



    <!-- BLOGPOSTS -->
    <div id="blogposts" class="blogposts">

        <!-- BLOG FILTER -->
        <div class="blog-filter">

            <!-- Filter search -->
            <form class="form form-filter">
                <input class="input input-filter" placeholder="Search on title...">
                <button class="button-primary button-filter">Search <i class="anchor-first no-hover fa fa-search" aria-hidden="true"></i></button>
            </form>

            <!-- Filter tags -->
            <div class="filter-tags">
                <div class="filter-tags__remove">
                    <button class="filter-tags__remove__tag tag">Remove tags</button>
                </div>

                <div class="filter-tags__tags">
                    <button class="tag tag-grey">Company</button>
                    <button class="tag tag-grey">Product</button>
                    <button class="tag tag-grey">Other tag</button>
                    <button class="tag tag-grey">Some more</button>
                </div>
            </div>
        </div>



        <!-- BLOGPOSTS - ARTICLES -->
        <main class="blogposts__articles">
            <article class="article">
                <img class="article__img" src="<?= $site->url() ?>/assets/img/header.jpg" />

                <div class="article__content">
                    <div class="article__content__tags">
                        <span class="tag tag-primary">Company</span>
                        <span class="tag tag-primary">Product</span>
                    </div>

                    <h3>Why you should go to Crete, the island</h3>
                    <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina.</p>

                    <div class="article__content__bottom">
                        <button class="button-primary">Lees blog <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></button>
                        <span class="min-read">11min read</span>
                    </div>
                </div>
            </article>

            <article class="article">
                <img class="article__img" src="<?= $site->url() ?>/assets/img/header.jpg" />

                <div class="article__content">
                    <div class="article__content__tags">
                        <span class="tag tag-primary">Company</span>
                        <span class="tag tag-primary">Product</span>
                    </div>

                    <h3>Why you should go to Crete, the island</h3>
                    <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina.</p>

                    <div class="article__content__bottom">
                        <button class="button-primary">Lees blog <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></button>
                        <span class="min-read">11min read</span>
                    </div>
                </div>
            </article>

            <article class="article">
                <img class="article__img" src="<?= $site->url() ?>/assets/img/header.jpg" />

                <div class="article__content">
                    <div class="article__content__tags">
                        <span class="tag tag-primary">Company</span>
                        <span class="tag tag-primary">Product</span>
                    </div>

                    <h3>Why you should go to Crete, the island</h3>
                    <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina.</p>

                    <div class="article__content__bottom">
                        <button class="button-primary">Lees blog <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></button>
                        <span class="min-read">11min read</span>
                    </div>
                </div>
            </article>
        </main>
    </div>



    <!-- CTA -->
    <section id="cta-1" class="cta">
        <div class="cta__content">
            <h2><?= $page->firstCtaTitle() ?> <span><?= $page->firstCtaTitleSpan() ?></span></h2>

            <!-- CTA buttons -->
            <?php if($page->firstCtaButtons()->isNotEmpty()): ?>
                <div class="buttons">

                    <!-- button -->
                    <?php foreach($page->firstCtaButtons()->toStructure() as $button): ?>
                        <a class="button <?= $button->typeOfButton() ?>" href="<?php if($button->destination() == "internal") { echo($button->internalPage()->toPage()->url() . $button->idPage()); } else { echo($button->externalUrl()); } ?>" <?php if($button->destination() == "external") { ?> target="_blank" <?php } ?>><?= $button->anchor() ?> <?php if($button->icon() == "chevronRight") { ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i> <?php } elseif($button->icon() == "chevronBottom") { ?> <i class="anchor-first no-hover fa fa-chevron-down" aria-hidden="true"></i> <?php } ?></a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php snippet('general/footer') ?>