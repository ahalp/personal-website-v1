<?php require_once('helpers.php') ?>
<?php require_once(MODEL . 'dbFunctions.php'); ?>	

<?php

function buildProjectPage($pId)
{
	$connection = connect();
	$projectArray = getProject($connection, $pId);

	$pTitle = $projectArray['title'];
	$pDateDetails = $projectArray['dateDetails'];
	$pDateYear = ($projectArray['dateYear'] == 0) ? "" : $projectArray['dateYear'] . " ";
	$pDescription = $projectArray['description'];
	$pTagsArray = getProjectTags($connection, $pId);

	buildHeaderWithTitle($pTitle);

	if (strlen($pTitle) == 0) {
		echo "error : page not found";
		return;
	}

	renderTemplate('project', array(
					'pTitle' => $pTitle,
					'pDescription' => $pDescription,
					'pDateDetails' => $pDateDetails,
					'pDateYear' => $pDateYear,
					'pTags' => $pTagsArray
					));
}

?>