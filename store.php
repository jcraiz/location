<?php
$myfile = fopen("location.txt", "w") or die("Unable to open file!");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>