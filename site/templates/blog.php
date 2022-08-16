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
                <h1>Get to know our company</h1>
                <p>Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de. En dan komt er nog zin uitgeschreven door.</p>

                <a class="button-primary" href="#">Our insights <i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </header>



    <!-- BLOGPOSTS -->
    <div class="blogposts">

        <!-- BLOG FILTER -->
        <div class="blog-filter">

            <!-- Filter search -->
            <form class="form form-filter">
                <input class="input input-filter" placeholder="Search on title...">
                <button class="button-primary button-filter">Search <i class="anchor-first fa fa-search" aria-hidden="true"></i></button>
            </form>

            <!-- Filter tags -->
            <div class="filter-tags">
                <div class="filter-tags__remove">
                    <button class="filter-tags__remove__tag tag">Remove tags</button>
                </div>

                <div class="filter-tags__tags">
                    <button class="tag">Company</button>
                    <button class="tag">Product</button>
                    <button class="tag">Other tag</button>
                    <button class="tag">Some more</button>
                </div>
            </div>
        </div>



        <!-- BLOGPOSTS - ARTICLES -->
        <main class="blogposts__articles">
            <article class="article">
                <img class="article__img" src="<?= $site->url() ?>/assets/img/header.jpg" />

                <div class="article__content">
                    <div class="article__content__tags">
                        <span class="tag">Company</span>
                        <span class="tag">Product</span>
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
                        <span class="tag">Company</span>
                        <span class="tag">Product</span>
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
                        <span class="tag">Company</span>
                        <span class="tag">Product</span>
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
        <h2>Got inspired?<br> Try our product <span>for free for a month.</span></h2>
        <a class="button-primary" href="#">Free trial <i class="anchor-first fa fa-chevron-right" aria-hidden="true"></i></a>
    </section>
</div>

<?php snippet('general/footer') ?>