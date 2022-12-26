<section class="clients-section section fade-section">
    <div class="content-container-l content-container">
        <h2><?= $block->clientsTitle() ?></h2>

        <!-- Clients -->
        <?php if ($block->clients()->isNotEmpty()) : ?>
            <div class="clients">

                <!-- client -->
                <?php foreach ($block->clients()->toStructure() as $client) : ?>

                    <?php if ($client->url()->isNotEmpty()) : ?>
                        <a class="client" href="<?= $client->url() ?>" target="_blank">
                            <?php if ($client->logo()->isNotEmpty()) : ?>
                                <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo" loading="lazy">
                            <?php endif; ?>
                        </a>
                    <?php else : ?>
                        <div class="client">
                            <?php if ($client->logo()->isNotEmpty()) : ?>
                                <img src="<?= $client->logo()->toFile()->url() ?>" alt="client logo" loading="lazy">
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>