<?php
$dir = "images/";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

echo "<pre>";
print_r($a);
echo "</pre>";
echo "<br />---------------------------<br />";
echo "<pre>";
print_r($b);
echo "</pre>";
die();
?>