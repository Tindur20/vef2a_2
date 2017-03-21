<link rel="stylesheet" type="text/css" href="main.css">
<h1>Verkefni 6 Json</h1>
<form action="append.php" method="POST">
	<p>Texti:</p>
	<input name="texti" type="text" / required><br>
	<p>Slóð:</p>
	<input name="linkur" type="text" / required><br><br>
	<input type="submit" name="submit" value="Save Data">
</form>

<?php
	$url = "http://tsuts.tskoli.is/2t/2811992349/vef2a/Verkefni%206/myndir.json";
	$json = file_get_contents($url);
	$myndir = json_decode($json,true);
	foreach ($myndir as $key => $value) {
		$linkur = explode(";", $value);
		echo "<p>" . $linkur[0] . "</p>";
		echo "<img src=\"" . $linkur[1] . "\"style=\"width:304px;height:228px;\">";
	}
?>