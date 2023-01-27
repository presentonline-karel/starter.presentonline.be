<?php isset($block) ? $teamGroupedContent = $block : $teamGroupedContent = $page; ?>

<section class="team-grouped-section section fade-section">
    <div class="team-grouped-container content-container-l content-container">
        <div class="team-grouped__header">
            <h2><?= $teamGroupedContent->teamGroupedTitle() ?></h2>
            <p><?= $teamGroupedContent->teamGroupedParagraph() ?></p>
        </div>

        <?php if($teamGroupedContent->teams()->isNotEmpty()): ?>
            <div class="team-grouped__teams">

                <?php foreach($teamGroupedContent->teams()->toStructure() as $team): ?>
                    <div class="team-group">
                        <h4><?= $team->name() ?></h4>

                        <?php if($team->employees()->isNotEmpty()): ?>
                            <div class="team-members">

                                <?php foreach($team->employees()->toStructure() as $member): ?>
                                    <div class="member">
                                        
                                        <?php if($memberImage = $member->memberPicture()->toFile()): ?>
                                            <img class="member__img" src="<?= $memberImage->url() ?>" alt="<?= $memberImage->alt() ?>" loading="lazy" />
                                        <?php else: ?>
                                            <img class="member__img" src="../../../assets/img/employee-placeholder.jpg" loading="lazy" />
                                        <?php endif; ?>

                                        <div class="member__info">
                                            <h5><?= $member->memberName() ?></h5>
                                            <p><?= $member->memberFunction() ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>