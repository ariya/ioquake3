<?php

switch ($_POST['agree']) {
	case "I Do Not Agree":
		$html = "<h2>KEINE DATEN FÜR SIE!</h2>
			 <p>You'll need to agree to the EULA if you want the
			 updated data.</p>"; //nazi-german for "NO DATA FOR YOU!"
		break;
		
	case "I Agree":
		$html = "<h2>You agree!</h2>
			 <p>Good for you. You can 
			 <a rel=\"nofollow\" href=\"http://www.icculus.org/~zakk/quake3-latest-pk3s.zip\">
			 download the <tt>pk3</tt>s</a> now.</p>";
		break;
	default:
			$eula = file_get_contents("include/id_patch_pk3s_Q3A_EULA.txt");
			$html = "<p>Newer <tt>pk3</tt> files from id point release patches
are required to play Quake III: Arena on icculus.org/quake3.</p>
<h2>EULA</h2>
<p>In order for us to distribute the updated pk3 files from id
Software, you need to agree to their EULA. Read through it, then click Agree if
you Agree.</p>
<pre>
$eula
</pre>
<form method=\"post\" action=\"?page=getdata\">
	<fieldset>
		<input type=\"submit\" name=\"agree\" value=\"I Agree\" />
		<input type=\"submit\" name=\"agree\" value=\"I Do Not Agree\" />
	</fieldset>
</form>";
}
echo $html;
