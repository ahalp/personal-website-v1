<?php require_once(CONTROLLER . 'helpers.php') ?>
<?php require_once(CONTROLLER . 'buildProjectsPage.php') ?>
<?php require_once(CONTROLLER . 'buildProjectPage.php') ?>
<?php require_once(CONTROLLER . 'helpers.php') ?>

<?php require_once(MODEL . 'dbFunctions.php'); ?>	

<?php 
function buildPage($page, $data = array()) {

	if ($page === PAGE_ABOUT) {
		buildAboutPage();
	} else if ($page === PAGE_PROJECTS) {
		$p_id = $data['project'];
		if (isset($p_id)) {
			buildProjectPage($p_id);
		} else {
			buildProjectsListPage();
		}
	} else if ($page == 'notfound') {
		echo 'error: page not found';
	} 

	buildFooter();
}

function buildAboutPage()
{
	buildHeaderWithTitle("About");
	render('about');
}

// General

function buildHeaderWithTitle($title)
{
	renderTemplate('header', array('title' => $title));
}

function buildFooter()
{
	renderTemplate('footer');
}

?>
