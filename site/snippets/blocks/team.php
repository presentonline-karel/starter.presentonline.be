<?php
    if(isset($block)) {
        $teamContent = $block;
    }
    else {
        $teamContent = $page;
    }
?>

<section class="team-section fade-section">
    <div class="team content-container-l content-container">
        <div class="team__text">
            <h2><?= $teamContent->teamTitle() ?></h2>
            <p><?= $teamContent->teamText() ?></p>
        </div>

        <?php if ($teamContent->team()->isNotEmpty()) : ?>
            <div class="employees">

                <?php foreach ($teamContent->team()->toStructure() as $employee) : ?>
                    <div class="employee">
                        <?php if ($employee->image()->isNotEmpty()) : ?>
                            <img class="employee__img" src="<?= $employee->image()->toFile()->url() ?>" alt="<?= $employee->image()->toFile()->alt() ?>" loading="lazy">
                        <?php endif; ?>

                        <h5><?= $employee->name() ?></h5>
                        <p><?= $employee->function() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>