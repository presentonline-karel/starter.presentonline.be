<?php isset($block) ? $blogArticlesContent = $block : $blogArticlesContent = $page; ?>

<section class="blog-articles-section section fade-section">
    <div class="content-container-l content-container">
        <div class="flex-desktop">
            <h2><?= $blogArticlesContent->bArticlesTitle() ?></h2>

            <?php if ($blogArticlesContent->bArticlesCta()->isNotEmpty()) : ?>
                <?php foreach ($blogArticlesContent->bArticlesCta()->toStructure() as $button) : ?>
                    <?php snippet("components/button", ["button" => $button]) ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>



        <!-- Articles -->
        <?php if($blogArticlesContent->articles()->isNotEmpty()): ?>
            <div class="blog-articles swiper">
                <div class="swiper-wrapper">
                    <?php foreach($blogArticlesContent->articles()->toPages() as $article): ?>

                        <!-- Article -->
                        <article class="article-searchable swiper-slide">
                            <a class="article" href="<?= $article->url() ?>">
                                <div>

                                    <!-- cover image -->
                                    <?php if ($article->headerImage()->isNotEmpty()) : ?>
                                        <img class="article__img" src="<?= $article->headerImage()->toFile()->url() ?>" alt="<?= $article->headerImage()->toFile()->alt() ?>" loading="lazy" />
                                    <?php endif; ?>

                                    <!-- text content -->
                                    <div class="article__content">
                                        <?php if ($article->tags()->isNotEmpty()) : ?>
                                            <div class="article__content__tags">
                                                <?php foreach (explode(", ", $article->tags()) as $tag) : ?>
                                                    <span class="tag tag-primary"><?= $tag ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                        <h3 class="article-title"><?= $article->articleTitle() ?></h3>
                                        <p><?= $article->articleIntro() ?></p>
                                    </div>
                                </div>

                                <!-- button + min-read -->
                                <div class="article__content__bottom">
                                    <button class="button-primary">Lees artikel <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></button>
                                    <span class="min-read"><?= $article->minRead() ?>min read</span>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>

        

        <?php if ($blogArticlesContent->bArticlesCta()->isNotEmpty()) : ?>
            <?php foreach ($blogArticlesContent->bArticlesCta()->toStructure() as $button) : ?>
                <?php snippet("components/button", ["button" => $button]) ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?= js("/build/js/swiper/blog-articles.js", ["defer" => true]) ?>