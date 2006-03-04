<?php
require("/webspace/icculus.org/news/IcculusNews.php");

$id = $_GET['id'];
$news_queue = 2;

if ($err = news_login($sock, 'localhost', 263, NULL, NULL, $news_queue))
	$err = "Failed to log in: $err";
else
{
	if (isset($id))
	{
		$digestarray[] = array( 'id' => $id );
	}

	else if ($err = news_digest($sock, $digestarray, false, 10))
	{
		$err = "Failed to get news digest: $err";
	}

	if (!isset($err))
	{
		foreach($digestarray as $digestItem)
		{
			if ($err = news_get($sock, $digestItem['id'], $item))
			{
				$err = "Failed to grab news item: $err";
				break;
			}
			echo "<h3>" . $item['title'] . "-" . $item['postdate'] . "</h3>\n<p>" . $item['text'] . "</p>";
		}
	}
}

news_logout($sock);

if ($err) {
	$code = 500;
	$detail = $err;
	require("errors.php");
}
?>
