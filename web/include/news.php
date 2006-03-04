<?php
require("/webspace/icculus.org/news/IcculusNews.php");

$id = $_GET['id'];
if (empty($_GET['news_index'])) { $news_index = 0; }
$news_queue = 2;
$news_item_count = 5;

if ($err = news_login($sock, 'localhost', 263, NULL, NULL, $news_queue))
	$err = "Failed to log in: $err";
else
{
	if (isset($id))
	{
		$digestarray[] = array( 'id' => $id );
	}

	else if ($err = news_digest($sock, $digestarray, false, $news_item_count))
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
		
		$post_count = count($digestarray);
		
		if ($news_index != 0)
		{
			$ncount = ($news_index - $news_item_count);
			if ($ncount == 0) { unset($ncount); }
			echo "<a class=\"floater right\" href=\"?page=news&amp;news_index=" . $ncount . "\">Newer&rarr;</a>";
		}
		if ($post_count == $news_item_count) {
			$ncount = ($news_index + $news_item_count);
			if ($ncount == 0) { unset($ncount); }
			echo "<a class=\"floater left\" href=\"?page=news&amp;news_index=" . $ncount . "\">&larr;Older</a>";
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
