<?php require_once('helpers.php') ?>
<?php require_once(MODEL . 'dbFunctions.php'); ?>	

<?php 

function buildProjectsListPage() {
	buildHeaderWithTitle("Deepkanwal Plaha");
	buildProjectsListHeader();
	
	$connection = connect();
	$projectsArray = getProjects($connection);

	buildProjectCells($projectsArray, $connection);
	buildProjectsListFooter($connection);
}

// function buildProjectsListPageForTag($tag) {
// 	buildHeaderWithTitle("Projects");
// 	buildProjectsListHeader();
	
// 	$connection = connect();
// 	$projectsArray = getProjects($connection);

// 	buildProjectCells($projectsArray);
// 	buildProjectsListFooter($connection);
// }


function buildProjectsListHeader() {
	echo '<div>';
}

function buildProjectsListFooter($conn) {
	$tagsArray = getTags($conn);

	// echo '<p class="italic"> browse by tag / date </p>';
	echo '</div>';
}

function buildProjectCells($projectsArray, $connection) {
	foreach ($projectsArray as $projectRow) { 
		$pId = $projectRow['pId'];
		$pTitle = $projectRow['title'];
		$pImageUrl = $projectRow['imageUrl'];
		$pDateDetails = $projectRow['dateDetails'];
		$pDateYear = ($projectRow['dateYear'] == 0) ? "" : $projectRow['dateYear'] . " ";
		$pLink = getProjectPageLink($projectRow['pId']);
		$pTagsArray = getProjectTags($connection, $pId);
		// for ($i=0; $i < 3; $i++) { 
		renderTemplate('projectCell', array(
						'pTitle' => $pTitle,
						'pLink' => $pLink,
						'pImageUrl' => $pImageUrl,
						'pDateDetails' => $pDateDetails,
						'pDateYear' => $pDateYear,
						'pTags' => $pTagsArray
						));
	}
}

?>