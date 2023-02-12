<?php isset($block) ? $teamContent = $block : $teamContent = $page; ?>

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
                        
                        <?php if($employeeImage = $employee->image()->toFile()): ?>
                            <?php snippet("helpers/image-builder", ["imageFile" => $employeeImage, "class" => "employee__img"]) ?>
                        <?php else: ?>
                            <img class="employee__img" src="../../../assets/img/employee-placeholder.jpg" alt="<?= $employee->name() ?>" loading="lazy" />
                        <?php endif; ?>

                        <h5><?= $employee->name() ?></h5>
                        <p><?= $employee->function() ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>