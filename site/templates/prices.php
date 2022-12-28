<?php snippet('general/header') ?>

<!-- CONTAINER PRICES -->
<div id="container" class="container container-prices">

    <!-- NAV -->
    <?php snippet('general/nav') ?>



    <!-- CONTENT -->
    <main>
        <section class="prices">
            <div class="content-container">

                <!-- Title -->
                <h1><?= $page->heroTitle() ?></h1>



                <!-- PRICES MOBILE -->
                <div class="pricing-tables mobile">
                    <div class="accordions">
                        <div class="accordion">
                            <div class="accordion__header">
                                <h4 class="title">Broden</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>

                            <div class="accordion__content">
                                <table class="table">
                                    <tr class="header-row row">
                                        <th></th>
                                        <th class="align-right pad-r-32"></th>
                                        <th class="align-right">/stuk</th>
                                    </tr>
                                    <tr class="row">
                                        <th>Wit brood</th>
                                        <td class="align-right pad-r-32"></td>
                                        <td class="align-right">€ 2.50</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Bruin brood</th>
                                        <td class="align-right pad-r-32"></td>
                                        <td class="align-right">€ 2.50</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Tijgerbrood</th>
                                        <td class="align-right pad-r-32"></td>
                                        <td class="align-right">€ 2.80</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Lang volkoren</th>
                                        <td class="align-right pad-r-32"></td>
                                        <td class="align-right">€ 3.00</td>
                                    </tr>
                                    <tr class="row">
                                        <th class="disclaimer"><a href="<?= $page->url() ?>#pricing-info">Extra info<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a></th>
                                        <td class="align-right pad-r-32"></td>
                                        <td class="align-right"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="accordion">
                            <div class="accordion__header">
                                <h4 class="title">Pistolets</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>

                            <div class="accordion__content">
                                <table class="table">
                                    <tr class="header-row row">
                                        <th></th>
                                        <th class="align-right pad-r-32">Klein</th>
                                        <th class="align-right">Groot</th>
                                    </tr>
                                    <tr class="row">
                                        <th>Witte pistolets</th>
                                        <td class="align-right pad-r-32">€ 0.45</td>
                                        <td class="align-right">€ 0.60</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Bruine pistolets</th>
                                        <td class="align-right pad-r-32">€ 0.45</td>
                                        <td class="align-right">€ 0.60</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Kaiser</th>
                                        <td class="align-right pad-r-32">€ 0.40</td>
                                        <td class="align-right">€ 0.55</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Maanzaad</th>
                                        <td class="align-right pad-r-32">€ 0.50</td>
                                        <td class="align-right">€ 0.65</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="accordion">
                            <div class="accordion__header">
                                <h4 class="title">Koffiekoeken</h4>
                                <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            </div>

                            <div class="accordion__content">
                                <table class="table">
                                    <tr class="header-row row">
                                        <th></th>
                                        <th class="align-right pad-r-32">Klein</th>
                                        <th class="align-right">Groot</th>
                                    </tr>
                                    <tr class="row">
                                        <th>Croissant</th>
                                        <td class="align-right pad-r-32">€ 1.00</td>
                                        <td class="align-right">€ 1.20</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Confituurkoek</th>
                                        <td class="align-right pad-r-32">€ 1.10</td>
                                        <td class="align-right">€ 1.30</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Kriekenkoek</th>
                                        <td class="align-right pad-r-32">€ 1.10</td>
                                        <td class="align-right">€ 1.30</td>
                                    </tr>
                                    <tr class="row">
                                        <th>Abrikozenkoek</th>
                                        <td class="align-right pad-r-32">€ 1.10</td>
                                        <td class="align-right">€ 1.30</td>
                                    </tr>
                                    <tr class="row">
                                        <th class="disclaimer"><i class="icon-first fa fa-info-circle" aria-hidden="true"></i>1 jaar geldig</th>
                                        <td class="align-right pad-r-32"></td>
                                        <td class="align-right"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- PRICES DESKTOP -->
                <div class="pricing-tables desktop">
                    <table class="table">
                        <tr class="header-row row">
                            <th>Broden</th>
                            <th class="align-right pad-r-32">/stuk</th>
                            <th class="align-right"></th>
                        </tr>
                        <tr class="row row-1">
                            <td>Wit brood</td>
                            <td class="align-right pad-r-32">€ 2.50</td>
                            <td class="align-right"></td>
                        </tr>
                        <tr class="row">
                            <td>Bruin brood</td>
                            <td class="align-right pad-r-32">€ 2.50</td>
                            <td class="align-right"></td>
                        </tr>
                        <tr class="row">
                            <td>Tijgerbrood</td>
                            <td class="align-right pad-r-32">€ 2.80</td>
                            <td class="align-right"></td>
                        </tr>
                        <tr class="row">
                            <td>Lang volkoren</td>
                            <td class="align-right pad-r-32">€ 3.00</td>
                            <td class="align-right"></td>
                        </tr>
                        <tr class="row row-last">
                            <td class="pad-t-16"><a class="disclaimer" href="<?= $page->url() ?>#pricing-info">Extra info<i class="anchor-first fa fa-chevron-down" aria-hidden="true"></i></a></td>
                            <td class="align-right pad-r-32"></td>
                            <td class="align-right"></td>
                        </tr>

                        <tr class="header-row row">
                            <th>Pistolets</th>
                            <th class="align-right pad-r-32">Klein</th>
                            <th class="align-right pad-r-32">Groot</th>
                        </tr>
                        <tr class="row row-1">
                            <td>Witte pistolets</td>
                            <td class="align-right pad-r-32">€ 0.45</td>
                            <td class="align-right pad-r-32">€ 0.60</td>
                        </tr>
                        <tr class="row">
                            <td>Bruine pistolets</td>
                            <td class="align-right pad-r-32">€ 0.45</td>
                            <td class="align-right pad-r-32">€ 0.60</td>
                        </tr>
                        <tr class="row">
                            <td>Kaiser</td>
                            <td class="align-right pad-r-32">€ 0.40</td>
                            <td class="align-right pad-r-32">€ 0.55</td>
                        </tr>
                        <tr class="row row-last">
                            <td>Maanzaad</td>
                            <td class="align-right pad-r-32">€ 0.50</td>
                            <td class="align-right pad-r-32">€ 0.65</td>
                        </tr>

                        <tr class="header-row row">
                            <th>Koffiekoeken</th>
                            <th class="align-right pad-r-32">Klein</th>
                            <th class="align-right pad-r-32">Groot</th>
                        </tr>
                        <tr class="row row-1">
                            <td>Croissant</td>
                            <td class="align-right pad-r-32">€ 1.00</td>
                            <td class="align-right pad-r-32">€ 1.20</td>
                        </tr>
                        <tr class="row">
                            <td>Confituurkoek</td>
                            <td class="align-right pad-r-32">€ 1.10</td>
                            <td class="align-right pad-r-32">€ 1.30</td>
                        </tr>
                        <tr class="row">
                            <td>Kriekenkoek</td>
                            <td class="align-right pad-r-32">€ 1.10</td>
                            <td class="align-right pad-r-32">€ 1.30</td>
                        </tr>
                        <tr class="row">
                            <td>Abrikozenkoek</td>
                            <td class="align-right pad-r-32">€ 1.10</td>
                            <td class="align-right pad-r-32">€ 1.30</td>
                        </tr>
                        <tr class="row row-last">
                            <td class="pad-t-16"><p class="disclaimer"><i class="icon-first fa fa-info-circle" aria-hidden="true"></i>1 jaar geldig</p></td>
                            <td class="align-right pad-r-32"></td>
                            <td class="align-right pad-r-32"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>



        <!-- INFO SECTION -->
        <section id="pricing-info" class="info">
            <div class="content-container">
                <div class="box">
                    <div class="box__header flex">
                        <div class="icon-container">
                            <i class="fa fa-info" aria-hidden="true"></i>
                        </div>

                        <h3><?= $page->infoPricesTitle() ?></h3>
                    </div>

                    <div class="blocks">
                        <?= $page->infoPricesBlocks()->toBlocks() ?>
                    </div>
                </div>

                <div class="info-sections">
                    <div class="blocks">
                        <?= $page->extraInfo()->toBlocks() ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>



<!-- JS SCRIPTS -->
<?= js('build/js/faq/accordion.js', ['defer' => true]) ?>

<?php snippet('general/footer') ?>