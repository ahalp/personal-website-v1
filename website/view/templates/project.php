<?php require_once(CONTROLLER . 'helpers.php') ?>

<div class="project-page">
	<h1> <?php echo htmlspecialchars($pTitle) ?> </h1>
	<p class="spaces"><?php echo  strtolower(htmlspecialchars($pDateDetails . '  ' . $pDateYear) . "  |   " . htmlspecialchars(buildProjectTagsString($pTags)) . "") ?> </p>
	<hr>
	<?php echo $pDescription ?>
</div>