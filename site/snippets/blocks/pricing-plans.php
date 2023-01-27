<?php isset($block) ? $pricingPlansContent = $block : $pricingPlansContent = $page; ?>

<section class="pricing-plans-section section fade-section">
    <div class="content-container-l content-container">
        <div class="pricing-plans-header">
            <h2><?= $pricingPlansContent->pricingPlansTitle() ?></h2>
            <p><?= $pricingPlansContent->pricingPlansParagraph() ?></p>
        </div>

        <?php if($pricingPlansContent->pricingplans()->isNotEmpty()): ?>
            <div class="pricing-plans swiper">
                <div class="swiper-wrapper">

                    <!-- Pricing plan -->
                    <?php foreach($pricingPlansContent->pricingplans()->toStructure() as $plan): ?>
                        <div class="pricing-plan swiper-slide <?php if($plan->planHasDiscount()->toBool()) { echo("discount"); } if($plan->planIsMostPopular()->toBool()) { echo(" most-popular"); } ?>">
                            <div>

                                <!-- Header -->
                                <div class="pricing-plan-header <?php if($plan->planHasDiscount()->toBool()) { echo("has-discount"); } ?>"> <!-- Set min-height when at least one plan has a discount -->

                                    <!-- tags -->
                                    <?php if($plan->planHasDiscount()->toBool() || $plan->planIsMostPopular()->toBool()): ?>
                                        <div class="tags">
                                            <?php if($plan->planHasDiscount()->toBool()): ?>
                                                <div class="tag discount"><?= $plan->discountIndication() ?></div>
                                            <?php endif; ?>
                                            <?php if($plan->planIsMostPopular()->toBool()): ?>
                                                <div class="tag most-popular">Meest populair</div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>

                                    <h3 class="pricing-plan__title"><?= $plan->name() ?></h3>

                                    <!-- price -->
                                    <div class="pricing-plan__pricing">
                                        <span class="euro-sign">€</span>
                                        <span class="price"><?php if($plan->planHasDiscount()->toBool()) { echo($plan->discountedPrice()); } else { echo($plan->price()); } ?></span>

                                        <?php if($plan->timeIndication()->isNotEmpty()): ?>
                                            <span class="period">
                                                <?php switch($plan->timeIndication()) {
                                                    case "piece":
                                                        echo("/stuk");
                                                        break;
                                                    case "hourly":
                                                        echo("/uur");
                                                        break;
                                                    case "daily":
                                                        echo("/dag");
                                                        break;
                                                    case "weekly":
                                                        echo("/week");
                                                        break;
                                                    case "monthly":
                                                        echo("/maand");
                                                        break;
                                                    case "yearly":
                                                        echo("/jaar");
                                                        break;
                                                    default:
                                                        echo("");
                                                        break;
                                                } ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                    <?php if($plan->planHasDiscount()->toBool()): ?>
                                        <div class="tag comparison-price">i.p.v. €<?= $plan->price() ?></div>
                                    <?php endif; ?>
                                </div>

                                <!-- Body -->
                                <div class="pricing-plan-body">
                                    <p class="pricing-plan__description"><?= $plan->planIntro() ?></p>
                                    <h4 class="pricing-plan__included-title"><?= $plan->featuresTitle() ?></h4>

                                    <?php if($plan->features()->isNotEmpty()): ?>
                                        <ul class="pricing-plan__features">
                                            
                                            <?php foreach($plan->features()->toStructure() as $feature): ?>
                                                <li class="feature"><i class="fa fa-check" aria-hidden="true"></i><?= $feature->feature() ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- CTA -->
                            <?php if ($plan->planCta()->isNotEmpty()) : ?>
                                <?php foreach ($plan->planCta()->toStructure() as $button) : ?>
                                    <?php snippet("components/button", ["button" => $button]) ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="swiper-pagination"></div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= js("/build/js/swiper/pricing-plans.js", ["defer" => true]) ?>