
<?php
/**
 * render function: renders a page component given a template and (optional) data
 *
 * @param fileName: string indicating the template filename
 * @param data: array of variables required in the template
 */

function render ($fileName, $data = array()) {
	extract($data);
	$templatePath = VIEW . $fileName . '.php';
	if (file_exists($templatePath)) {
		require($templatePath);
	} else {
		echo 'Could not load template at path: ' . $templatePath;
	}
}

function renderTemplate ($template, $data = array()) {
	render('templates/' . $template, $data);
}

function getProjectPageLink ($title) {
	$link = BASE_URL . 'project/' . urlencode($title);
	return $link;
}

function buildProjectTagsString($pTagsArray) {
	$tagString = "";
	foreach ($pTagsArray as $index => $tag) {
		if ($index == 0) $tagString = $tag['tag'];
		else $tagString = $tagString . ", " . $tag['tag'];
	}
	return $tagString;
}

?>

