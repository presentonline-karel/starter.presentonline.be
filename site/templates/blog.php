<?php snippet("general/header") ?>

<!-- CONTAINER BLOG -->
<div id="container" class="container container-blog">

    <!-- USP-BAR -->
    <?php snippet("helpers/usp-bar-impl") ?>

    <!-- HEADER BLOG -->
    <?php snippet("blocks/heroNoImage") ?>



    <!-- BLOGPOSTS -->
    <div id="blogposts" class="blogposts">
        <div class="content-container-l content-container">

            <!-- BLOG FILTER -->
            <div class="blog-filter">

                <!-- Filter search -->
                <form class="form form-filter">
                    <input class="input input-filter" placeholder="Search on title...">
                    <button class="button-primary button-filter"><?php if($kirby->language()->code() == "nl") { ?> Zoeken <?php } elseif($kirby->language()->code() == "fr") { ?> Chercher <?php } elseif($kirby->language()->code() == "en") { ?> Search <?php } ?> <i class="anchor-first no-hover fa fa-search" aria-hidden="true"></i></button>
                </form>

                <!-- Filter tags -->
                <div class="filter-tags">
                    <div class="filter-tags__remove">
                        <button class="filter-tags__remove__tag tag"><?php if($kirby->language()->code() == "nl") { ?> Verwijder tags <?php } elseif($kirby->language()->code() == "fr") { ?> Supprimer tags <?php } elseif($kirby->language()->code() == "en") { ?> Remove tags <?php } ?></button>
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
                                    <button class="tag tag-grey filter-tag"><?= $tag ?></button>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!-- Blog search/tags feedback -->
                <p class="search-feedback min-read">Search feedback</p>
            </div>




            <!-- BLOGPOSTS - ARTICLES -->
            <main class="blogposts__articles articles-swiper swiper">

                <!-- ARTICLES -->
                <?php if ($articles->isNotEmpty()) : ?>
                    <div class="swiper-wrapper">

                        <!-- Article -->
                        <?php foreach ($articles as $article) : ?>
                            <article class="article-searchable swiper-slide">
                                <a class="article" href="<?= $article->url() ?>">
                                    <div>

                                        <?php if($articleImage = $article->headerImage()->toFile()): ?>
                                            <?php snippet("helpers/image-builder", ["imageFile" => $articleImage, "class" => "article__img", "article" => $article]) ?>
                                        <?php endif; ?>

                                        <!-- text content -->
                                        <div class="article__content">

                                            <!-- tags -->
                                            <?php if ($article->tags()->isNotEmpty()) : ?>
                                                <div class="article__content__tags">

                                                    <!-- tag -->
                                                    <?php foreach (explode(", ", $article->tags()) as $tag) : ?>
                                                        <span class="tag tag-primary"><?= $tag ?></span>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>

                                            <!-- title -->
                                            <h3 class="article-title"><?= $article->articleTitle() ?></h3>

                                            <!-- intro -->
                                            <p><?= $article->articleIntro() ?></p>
                                        </div>
                                    </div>



                                    <!-- button + min-read -->
                                    <div class="article__content__bottom">
                                        <button class="button-primary"><?php if($kirby->language()->code() == "nl") { ?> Lees artikel <?php } elseif($kirby->language()->code() == "fr") { ?> Lire l'article <?php } elseif($kirby->language()->code() == "en") { ?> Read article <?php } ?> <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></button>
                                        <span class="min-read"><?= $article->minRead() ?>min <?php if($kirby->language()->code() == "nl") { ?> lezen <?php } elseif($kirby->language()->code() == "fr") { ?> lire <?php } elseif($kirby->language()->code() == "en") { ?> read <?php } ?></span>
                                    </div>
                                </a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <div class="swiper-pagination"></div>
            </main>
        </div>
    </div>



    <!-- CTA -->
    <?php if($page->firstCtaSwitch()->toBool()): ?>
        <?php snippet("blocks/firstCta") ?>
    <?php endif; ?>
</div>



<!-- JS SCRIPTS -->
<?= js("build/js/blog/blog-search.js", ["defer" => true]) ?>
<?= js("build/js/blog/blog-tags.js", ["defer" => true]) ?>
<?= js("/build/js/swiper/articles.js", ["defer" => true]) ?>



<?php snippet("general/footer") ?>