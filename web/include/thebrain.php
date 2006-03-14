<?php
if  ((strpos($_SERVER['HTTP_ACCEPT'], "application/xhtml+xml")) || ($ua->parent == "Validation Checkers"))  {
	$content_type = "application/xhtml+xml";
}

elseif ((strpos($_SERVER['HTTP_ACCEPT'], "application/xml")) || ($ua->browser == "IE" && $ua->version >= 6)) {
	if ($ua->browser == "IE") {
		$extradoctype = "<?xml-stylesheet type=\"text/xsl\" href=\"/include/copy.xsl\"?>";
	}
	$content_type = "application/xml";
}
else {
	$content_type = "text/html";
}

header("Content-type: $content_type; charset=UTF-8");

$navlist = array(
 "home"		=> "Home",
 "get"		=> "Get It",
 "help"		=> "Help",
 "status" 	=> "Status",
 "discuss"	=> "Discussion",
);

function include_safe($file) {
	if (file_exists("include/$file")) {
		include($file);
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
