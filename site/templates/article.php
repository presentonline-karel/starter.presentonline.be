<?php snippet("general/header") ?>

<!-- CONTAINER ARTICLE -->
<div id="container" class="container container-article">

    <!-- USP-BAR -->
    <?php snippet("general/usp-bar-impl") ?>

    <!-- NAV -->
    <?php snippet("general/nav") ?>

    <!-- ARTICLE -->
    <main class="article-section article-page">
        <div class="article__content">

            <!-- Article header -->
            <div class="article__content__header article-page__header">

                <?php $date = strtotime($page->publicationDate()); ?>
                <span class="publication-date"><?= date("j F Y", $date); ?></span>

                <!-- tags -->
                <?php if ($page->tags()->isNotEmpty()) : ?>
                    <div class="tags">

                        <!-- tag -->
                        <?php foreach (explode(", ", $page->tags()) as $tag) : ?>
                            <span class="tag tag-grey"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <h1><?= $page->articleTitle() ?></h1>
                <p><?= $page->articleIntro() ?></p>
            </div>


            
            <!-- Blocks -->
            <section class="article__content__blocks blocks">
                <?php foreach ($page->articleContent()->toBlocks() as $block) : ?>
                    <?= $block ?>
                <?php endforeach ?>
            </section>



            <!-- Button - Back to all blogs -->
            <a class="button-primary" href="<?php $site->url() ?>/blog">Alle blogs <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
        </div>
    </main>



    <!-- KEEP READING -->
    <?php if($page->relatedArticlesSwitch()->toBool()): ?>
        <section class="keep-reading-section section fade-section">
            <div class="keep-reading content-container-s content-container">
                <h2>Gerelateerde<br> artikels</h2>

                <!-- Related articles -->
                <?php if ($page->relatedArticles()->isNotEmpty()) : ?>
                    <div class="related-articles">

                        <!-- get related articles -->
                        <?php $relatedArticles = $page->relatedArticles()->toPages(); ?>

                        <!-- article -->
                        <?php foreach ($relatedArticles as $relatedArticle) : ?>
                            <article>
                                <a class="related-articles__article" href="<?= $relatedArticle->url() ?>">

                                    <!-- top -->
                                    <div class="related-articles__article__top">
                                        <h5><?= $relatedArticle->articleTitle() ?></h5>
                                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                    </div>

                                    <!-- tags -->
                                    <?php if ($relatedArticle->tags()->isNotEmpty()) : ?>
                                        <div class="tags">

                                            <!-- tag -->
                                            <?php foreach (explode(", ", $relatedArticle->tags()) as $tag) : ?>
                                                <span class="tag tag-primary"><?= $tag ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                    <p class="min-read"><?= $relatedArticle->minRead() ?>min read</p>
                                </a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php snippet("general/footer") ?>