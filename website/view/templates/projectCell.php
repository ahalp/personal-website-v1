<?php require_once(CONTROLLER . 'helpers.php') ?>

<div class="project-cell fade-transition fade-background gray">
 	<a href="<?php echo $pLink ?>"><span class="project-cell-link"></span></a>
    <h1> <?php echo (htmlspecialchars($pTitle)) ?></h1>
    <p class="subtitle spaces"><?php echo strtolower(htmlspecialchars($pDateDetails . " " . $pDateYear . "  |   " . buildProjectTagsString($pTags)) . "") ?> </p>
    <img src="<?php echo $pImageUrl ?>" >
<!--     <p>
      <?php echo htmlspecialchars($pDescription) ?>
    </p> -->
</div>