<?php isset($block) ? $clientsContent = $block : $clientsContent = $page; ?>

<section class="clients-section section fade-section">
    <div class="content-container-l content-container">
        <h2><?= $clientsContent->clientsTitle() ?></h2>

        <!-- Clients -->
        <?php if ($clientsContent->clients()->isNotEmpty()) : ?>
            <div class="clients">

                <!-- client -->
                <?php foreach ($clientsContent->clients()->toStructure() as $client) : ?>

                    <?php if ($client->url()->isNotEmpty()) : ?>
                        <a class="client" href="<?= $client->url() ?>" target="_blank">

                            <?php if ($clientLogo = $client->logo()->toFile()) : ?>
                                <?php snippet("helpers/image-converter", ["imageFile" => $clientLogo]) ?>
                            <?php endif; ?>
                        </a>

                    <?php else : ?>
                        <div class="client">
                            
                            <?php if ($clientLogo = $client->logo()->toFile()) : ?>
                                <?php snippet("helpers/image-converter", ["imageFile" => $clientLogo]) ?>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>