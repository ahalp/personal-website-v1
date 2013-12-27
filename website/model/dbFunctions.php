<?php
define('DB_PROJECTS', 'projects');
define('DB_PROJECT_TAGS', 'project_tags');
define('DB_PROJECTS_ESSENTIAL_ATTRIBUTES', 'pId, title, dateDetails, dateYear, imageUrl');
define('DB_PROJECTS_ATTRIBUTES', DB_PROJECTS_ESSENTIAL_ATTRIBUTES . ', description');

?>

<?php

function connect()
{
	try {
		// Replace with DH database credentials.
		$user = 'root';
		$pass = 'mysql';
		$dbh = new PDO('mysql:host=localhost;dbname=website', $user, $pass);
		return $dbh;
	} catch (PDOException $e) {
		echo "Error <connect> : " . $e->getMessage() . "<br/>";
		die();
	}
}

function getProjects($dbh)
{
	$q = $dbh->prepare("SELECT " . DB_PROJECTS_ESSENTIAL_ATTRIBUTES .  " FROM " . DB_PROJECTS . " ORDER BY pId DESC");
	$q->execute();

	$result = $q->fetchAll();
	return $result;
}

function getProject($dbh, $pid)
{
	$q = $dbh->prepare("SELECT " . DB_PROJECTS_ATTRIBUTES . " FROM " . DB_PROJECTS . " WHERE pId = ?");
	$q->bindParam(1, $pid);
	$q->execute();

	$result = $q->fetch(PDO::FETCH_ASSOC);
	return $result;
}

function getProjectsForTag($dbh, $tag)
{
	$q = $dbh->prepare("SELECT DISTINCT pId FROM " . DB_PROJECT_TAGS . " WHERE tag = ?");
	$q->bindParam(1, $tag);
	$q->execute();
	$result = $q->fetch(PDO::FETCH_ASSOC);

	return $result;
}

function getTags($dbh) 
{
	$q = $dbh->prepare("SELECT tag FROM " . DB_PROJECT_TAGS);
	$q->execute();

	$result = $q->fetchAll();
	return $result;
}

function getProjectTags($dbh, $pid)
{
	$q = $dbh->prepare("SELECT tag FROM " . DB_PROJECT_TAGS . " WHERE pId = ?");
	$q->bindParam(1, $pid);
	$q->execute();

	$result = $q->fetchAll();
	return $result;
}

?>