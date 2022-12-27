<section class="team-section fade-section">
    <div class="team content-container-l content-container">
        <div class="team__text">
            <h2><?= $block->teamTitle() ?></h2>
            <p><?= $block->teamText() ?></p>
        </div>

        <!-- Employees -->
        <?php if ($block->team()->isNotEmpty()) : ?>
            <div class="employees">

                <!-- employee -->
                <?php foreach ($block->team()->toStructure() as $employee) : ?>
                    <div class="employee">

                        <!-- image -->
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