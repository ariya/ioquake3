<?php
set_include_path("include");
require("thebrain.php");
ob_start();
?>
<?php //hawhaw
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>";
	echo $extradoctype;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta content="<?php echo $content_type; ?> charset=UTF-8" />
	<title>icculus.org/quake3: <?php echo $navlist[$page]; ?></title>
	<link rel="stylesheet" href="ioq3.css" type="text/css" />
</head>
<body>
	<h1>icculus.org/quake3</h1>
	<ul id="navigation">
		<?php
		foreach ($navlist as $file => $alias) {
			echo "<li>";
			if ($file != $page) { echo "<a href=\"?page=$file\">$alias</a>"; }
			else { echo "<span class=\"current\">$alias</span>"; }
			echo "</li>\n";
		}
		?>
	</ul>
	<div id="content">
		<?php include_safe("$page.php"); ?>
	</div>
	<div id="footer">
		<a href="http://jigsaw.w3.org/css-validator/validator?uri=http://icculus.org/quake3/ioq3.css">Valid CSS</a> |
		<a href="http://validator.w3.org/check?uri=http://icculus.org/quake3">Valid XHTML</a> |
		<a href="http://icculus.org">icculus.org</a>
		<br />
		Website Design by <a href="http://floam.sh.nu" title="floam">Aaron Gyes</a>
	</div>
</body>
</html>
<?php ob_end_flush(); ?>
