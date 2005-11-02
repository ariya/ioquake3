<?php
$navlist = array(
 "home" => "Home",
 "instruc" => "Instructions",
 "status" => "Status"
);

function include_safe($file) {
	if (file_exists("include/$file")) {
		if (strpos(realpath("include/$file"), realpath($_SERVER['DOCUMENT_ROOT'])) !== 0) {
			echo $_SERVER['DOCUMENT_ROOT'];
			echo realpath("include/$file");
			$code = 403;
			require("errors.php");
		}
		else {
			include($file);
		}
	}
	else {
		$code = 404;
		require("errors.php");
	}
}

if (!$_GET['page']) {
	$page = "home";
}
else {
	$page = $_GET['page'];
}
?>
