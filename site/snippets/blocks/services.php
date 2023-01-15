<?php isset($block) ? $servicesContent = $block : $servicesContent = $page; ?>

<section id="services" class="services-section section fade-section">
    <div class="content-container-l content-container">
        <h2><?= $servicesContent->servicesTitle() ?></h2>

        <?php if ($servicesContent->services()->isNotEmpty()) : ?>
            <div class="services">
                <?php foreach ($servicesContent->services()->toStructure() as $service) : ?>
                    <?php if($service->containsLink()->toBool() == true): ?>
                        <a class="service" href="<?php if ($service->destination() == "internal") { echo ($service->internalPage()->toPage()->url() . $service->idPage()); } else { echo ($service->externalUrl()); } ?>" <?php if ($service->destination() == "external") { ?> target="_blank" <?php } ?>>
                            <div class="service__icon-container">
                                <?php switch ($service->icon()) {
                                    case "coffee":
                                        ?><i class="fa fa-coffee" aria-hidden="true"></i><?php
                                        break;
                                    case "cake":
                                        ?><i class="fa fa-pie-chart" aria-hidden="true"></i><?php
                                        break;
                                    case "heart":
                                        ?><i class="fa fa-heart" aria-hidden="true"></i><?php
                                        break;
                                    default:
                                        ?><i class="fa fa-check" aria-hidden="true"></i><?php
                                } ?>
                            </div>

                            <h3><?= $service->title() ?></h3>
                            <p><?= $service->paragraph() ?></p>
                        </a>
                    <?php else: ?>
                        <div class="service">
                            <div class="service__icon-container">
                                <?php switch ($service->icon()) {
                                    case "coffee":
                                        ?><i class="fa fa-coffee" aria-hidden="true"></i><?php
                                        break;
                                    case "cake":
                                        ?><i class="fa fa-pie-chart" aria-hidden="true"></i><?php
                                        break;
                                    case "heart":
                                        ?><i class="fa fa-heart" aria-hidden="true"></i><?php
                                        break;
                                    default:
                                        ?><i class="fa fa-check" aria-hidden="true"></i><?php
                                } ?>
                            </div>

                            <h3><?= $service->title() ?></h3>
                            <p><?= $service->paragraph() ?></p>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if($servicesContent->firstCtaSwitch()->toBool()): ?>
            <div class="cta__content">
                <h2><?= $servicesContent->firstCtaTitle() ?><br> <span><?= $servicesContent->firstCtaTitleSpan() ?></span></h2>

                <?php if ($servicesContent->firstCtaButtons()->isNotEmpty()) : ?>
                    <div class="buttons <?php if(count($servicesContent->firstCtaButtons()->toStructure()) == 1) { echo("single-button"); } ?>">
                        <?php foreach ($servicesContent->firstCtaButtons()->toStructure() as $button) : ?>
                            <?php snippet("components/button", ["button" => $button]) ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA MOBILE -->
<?php if($servicesContent->firstCtaSwitch()->toBool()): ?>
    <?php snippet("blocks/firstCta", ["block" => $servicesContent, "customClass" => "customBlock"]) ?>
<?php endif; ?>