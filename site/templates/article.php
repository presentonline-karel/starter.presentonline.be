<?php snippet('general/header') ?>

<!-- CONTAINER ARTICLE -->
<div id="container" class="container container-article">

    <!-- NAV -->
    <?php snippet('general/nav') ?>

    <!-- ARTICLE -->
    <main class="article-page">

        <!-- Article header -->
        <div class="article-page__header">

            <!-- convert article publication date to PHP date/time object -->
            <?php $date = strtotime($page->publicationDate()); ?>

            <!-- publication date -->
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

            <!-- title -->
            <h1><?= $page->articleTitle() ?></h1>

            <!-- intro -->
            <p class="article__header__intro"><?= $page->articleIntro() ?></p>
        </div>



        <!-- Image -->
        <?php if($page->headerImage()->isNotEmpty()): ?>
            <img class="article-page__img" src="<?= $page->headerImage()->toFile()->url() ?>" alt="<?= $page->headerImage()->toFile()->alt() ?>" />
        <?php endif; ?>



        <!-- Article section -->
        <div class="article-page__section">
            <h3><?= $page->articleFirstSubtitle() ?></h3>
            <p><?= $page->articleFirstParagraph() ?></p>
        </div>



        <!-- Image -->
        <?php if($page->sectionImage()->isNotEmpty()): ?>
            <img class="article-page__img" src="<?= $page->sectionImage()->toFile()->url() ?>" alt="<?= $page->sectionImage()->toFile()->alt() ?>" />
        <?php endif; ?>



        <!-- Article section -->
        <div class="article-page__section">
            <h3><?= $page->articleSecondSubtitle() ?></h3>
            <p><?= $page->articleSecondParagraph() ?></p>
        </div>



        <!-- Button - Back to all blogs -->
        <a class="button-primary" href="<?php $site->url() ?>/blog">Alle blogs <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </main>



    <!-- KEEP READING -->
    <section class="keep-reading section">
        <h2>Gerelateerde<br> artikels</h2>

        <!-- Related articles -->
        <?php if ($page->relatedArticles()->isNotEmpty()) : ?>
            <div class="related-articles">

                <!-- get related articles -->
                <?php $relatedArticles = $page->relatedArticles()->toPages(); ?>

                <!-- article -->
                <?php foreach ($relatedArticles as $relatedArticle) : ?>
                    <article class="related-articles__article">

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
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </section>
</div>

<?php snippet('general/footer') ?>