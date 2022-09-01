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

                <!-- Get articles from content + initialize tags array -->
                <?php $articles = $page->children(); ?>
                <?php $tagsCollection = []; ?>

                <!-- Tags -->
                <?php if($articles->isNotEmpty()): ?>

                    <!-- Make array with all unique tags -->
                    <?php foreach($articles as $article): ?>
                        <?php foreach($article->tags() as $tags): ?>

                            <!-- Turn article tags into an array -->
                            <?php $articleTags = explode(", ", $tags); ?>

                            <!-- Add tag to collection if not already in there -->
                            <?php foreach($articleTags as $tag): ?>
                                <?php if(!in_array($tag, $tagsCollection)): ?>
                                    <?php array_push($tagsCollection, $tag); ?>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        <?php endforeach; ?>
                    <?php endforeach; ?>



                    <!-- Tags for blog filter -->
                    <?php if(count($tagsCollection) > 0): ?>
                        <div class="filter-tags__tags">
                            <?php foreach($tagsCollection as $tag): ?>
                                <button class="tag tag-grey"><?= $tag ?></button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>



        <!-- BLOGPOSTS - ARTICLES -->
        <main class="blogposts__articles">
            
            <!-- ARTICLES -->
            <?php if($articles->isNotEmpty()): ?>

                <!-- Article -->
                <?php foreach($articles as $article): ?>
                    <article class="article">

                        <!-- cover image -->
                        <img class="article__img" src="<?= $site->url() ?>/assets/img/header.jpg" />

                        <!-- text content -->
                        <div class="article__content">

                            <!-- tags -->
                            <?php if($article->tags()->isNotEmpty()): ?>
                                <div class="article__content__tags">

                                    <!-- tag -->
                                    <?php foreach(explode(", ", $article->tags()) as $tag): ?>
                                        <span class="tag tag-primary"><?= $tag ?></span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- title -->
                            <h3><?= $article->articleTitle() ?></h3>

                            <!-- intro -->
                            <p><?= $article->articleIntro() ?></p>

                            <!-- button + min-read -->
                            <div class="article__content__bottom">
                                <a class="button-primary" href="<?= $article->url() ?>">Lees artikel <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
                                <span class="min-read"><?= $article->minRead() ?>min read</span>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
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