<?php snippet('general/header') ?>

<!-- CONTAINER ARTICLE -->
<div id="container" class="container container-article">

    <!-- NAV -->
    <?php snippet('general/nav') ?>

    <!-- ARTICLE -->
    <main class="article-page">

        <!-- Article header -->
        <div class="article-page__header">
            <span class="publication-date">8 Aug. 2022</span>

            <div class="tags">
                <span class="tag">Company</span>
                <span class="tag">Product</span>
            </div>

            <h1>Why you should buy our amazing product</h1>

            <p class="article__header__intro">Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.</p>
        </div>



        <!-- Image -->
        <img class="article-page__img" src="<?= $site->url() ?>/assets/img/header.jpg" />



        <!-- Article section -->
        <div class="article-page__section">
            <h3>Why is growth marketing the best form of marketing?</h3>
            <p>
                Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.<br><br> Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.
            </p>
        </div>



        <!-- Image -->
        <img class="article-page__img" src="<?= $site->url() ?>/assets/img/header.jpg" />



        <!-- Article section -->
        <div class="article-page__section">
            <h3>Why is growth marketing the best form of marketing?</h3>
            <p>
                Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.<br><br> Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.
            </p>
        </div>



        <!-- Button - Back to all blogs -->
        <a class="button-primary" href="#">Alle blogs <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </main>



    <!-- KEEP READING -->
    <section class="keep-reading section">
        <h2>Or keep reading</h2>

        <!-- Related articles -->
        <div class="related-articles">

            <!-- article -->
            <article class="related-articles__article">
                <div class="related-articles__article__top">
                    <h5>Another serious blogpost for something different</h5>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>

                <div class="tags">
                    <span class="tag">Company</span>
                    <span class="tag">Product</span>
                </div>

                <p class="related-articles__article__min-read">11min read</p>
            </article>

            <!-- article -->
            <article class="related-articles__article">
                <div class="related-articles__article__top">
                    <h5>Another serious blogpost for something different</h5>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </div>

                <div class="tags">
                    <span class="tag">Company</span>
                    <span class="tag">Product</span>
                </div>

                <p class="related-articles__article__min-read">11min read</p>
            </article>
        </div>
    </section>
</div>

<?php snippet('general/footer') ?>