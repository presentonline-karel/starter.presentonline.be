<?php snippet("general/header") ?>

<!-- CONTAINER HOME -->
<div id="container" class="container container-home">

    <!-- USP-BAR -->
    <?php snippet("helpers/usp-bar-impl") ?>

    <!-- HEADER HOME -->
    <?php snippet("blocks/heroBigImage") ?>



    <main id="page-sections">

        <!-- CLIENTS -->
        <?php if($page->clientsSwitch()->toBool()): ?>
            <?php snippet("blocks/clients") ?>
        <?php endif; ?>



        <!-- SERVICES -->
        <?php if($page->servicesSwitch()->toBool()): ?>
            <?php snippet("blocks/services") ?>
        <?php endif; ?>



        <!-- CONTENT -->
        <?php if($page->contentSwitch()->toBool()): ?>
            <?php snippet("blocks/textWithImage") ?>
        <?php endif; ?>



        <!-- TESTIMONIALS -->
        <?php if($page->testimonialsSwitch()->toBool()): ?>
            <?php snippet("blocks/testimonials") ?>
        <?php endif; ?>



        <!-- CTA -->
        <?php if($page->secondCtaSwitch()->toBool()): ?>
            <section id="cta-2" class="cta fade-section">
                <div class="content-container-l content-container">
                    <div class="cta__content">
                        <h2><?= $page->secondCtaTitle() ?><br> <span><?= $page->secondCtaTitleSpan() ?></span></h2>

                        <?php if ($page->secondCtaButtons()->isNotEmpty()) : ?>
                            <div class="buttons <?php if(count($page->secondCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                                <?php foreach ($page->secondCtaButtons()->toStructure() as $button) : ?>
                                    <?php snippet("components/button", ["button" => $button]) ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    </main>
</div>



<?php snippet("general/footer") ?>