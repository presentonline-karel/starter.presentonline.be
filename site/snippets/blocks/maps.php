<?php isset($block) ? $mapsContent = $block : $mapsContent = $page; ?>

<section class="maps fade-section">
    <iframe class="maps__iframe" src="<?= $mapsContent->mapsUrl() ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>