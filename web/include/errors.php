<?php
if (!$code) { $code = $_GET['code']; }

switch($code) {
	case 403:
		$error['name'] = "Forbidden";
		$error['description'] = "You don't have permission to be here. Go away!";
		break;
	case 404:
		$error['name'] = "Not Found";
		$error['description'] = "The file was not found. We probably screwed up.";
		break;
}
header("HTTP/1.0 $code" . $error['name']);
echo "<h2>$error[name]</h2>
<p>$error[description]</p>";
?>
