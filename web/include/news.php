<?php
require("/webspace/icculus.org/news/IcculusNews.php");

$id = $_GET['id'];
if (empty($_GET['news_index']))
	$news_index = false;
else
	$news_index = $_GET['news_index'];
$news_queue = 2;
$news_item_max = 5;

if ($err = news_login($sock, 'localhost', 263, NULL, NULL, $news_queue))
	$err = "Failed to log in: $err";
else
{
	if ($err = news_digest($sock, $digestarray, $news_index, $news_item_max))
	{
		$err = "Failed to get news digest: $err";
	}
	
	$current_post = 0;
	$news_item_count = count($digestarray);
	
	if (!isset($err))
	{
		foreach($digestarray as $digestItem)
		{
			if ($err = news_get($sock, $digestItem['id'], $item))
			{
				$err = "Failed to grab news item: $err";
				break;
			}
			echo "<h3>" . $item['title'] . " - <em>" . date("F j, Y", strtotime($item['postdate'])) . "</em></h3>\n<p>" . $item['text'] . "</p>";
			if ($current_post++ == $news_item_count - 1)
				$lastid = $digestItem['id'];
			}
		}
		echo "<p>";
		if ($news_item_count == $news_item_max)
			echo "<a class=\"left\" href=\"?page=news&amp;news_index=$lastid\">&larr;Backpedal</a>";
		if ($news_index != false)
			echo "<a class=\"right\" href=\"?page=news\">To Newest&rarr;</a>";
		echo "</p>";
}

news_logout($sock);

if ($err) {
	$code = 500;
	$detail = $err;
	require("errors.php");
}
?>
