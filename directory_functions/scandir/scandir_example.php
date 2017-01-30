<?php
$dir = getcwd();
$scand1 = scandir($dir);
$pisahkan = implode(",", $scand1);
print_r($pisahkan);


?>
