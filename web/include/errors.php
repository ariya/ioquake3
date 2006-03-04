<?php
if (!$code) { $code = $_GET['code']; }
if (!$detail) { $error['detail'] = $_GET['detail']; }

switch($code)
{
	case 403:
		$error['name'] = "Forbidden";
		$error['description'] = "You don't have permission to be here. Go away!";
		break;
	case 404:
		$error['name'] = "Not Found";
		$error['description'] = "The file was not found. We probably screwed up.";
		break;
	case 500:
		$error['name'] = "Internal Server Error";
		$error['description'] = "Oh, crap. Something is broke and it's almost definitely our fault!";
		break;
}

header("HTTP/1.0 $code" . $error['name']);
echo "<h2>$error[name]</h2>
<p>$error[description] $error[detail]</p>";
?>
