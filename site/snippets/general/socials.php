<?php if ($site->socials()->isNotEmpty()) : ?>
    <div class="socials">
        <?php foreach ($site->socials()->toStructure() as $social) : ?>
            <?php if ($social->social() == "facebook") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <?php elseif ($social->social() == "instagram") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <?php elseif ($social->social() == "linkedin") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <?php elseif ($social->social() == "twitter") : ?>
                <a class="social" href="<?= $social->url() ?>" target="_blank" aria-label="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>