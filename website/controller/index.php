<?php
define('APP_FOLDER', "../website/");
define('VIEW', APP_FOLDER . 'view/');
define('MODEL', APP_FOLDER . 'model/');
define('CONTROLLER', APP_FOLDER . 'controller/');
?>

<?php 
define('PAGE_PROJECTS', 'projects');
define('PAGE_ABOUT', 'about');
define('PAGE_NOT_FOUND', 'notfound');
?>

<?php
define('BASE_URL', '/personal-website/deepkanwal.com/')
?>

<?php require_once(CONTROLLER . 'builders.php') ?>

<?php

	$page = PAGE_PROJECTS;
	$project = NULL;

	if (isset($_GET['page'])) {
		$getPage = htmlspecialchars(urldecode($_GET['page']));
		if ($getPage === PAGE_PROJECTS || $getPage === PAGE_ABOUT) {
			$page = $getPage;
		}
		if ($page === PAGE_PROJECTS && isset($_GET['project'])) {
			$project =  htmlspecialchars(urldecode($_GET['project']));
		}
	}

	buildPage($page, array('project' => $project));

?>