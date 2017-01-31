<?php
$dirURL = dirname(__FILE__);
$dirURL2 = str_replace($_SERVER['DOCUMENT_ROOT'],'',$dirURL);
$dirURL3 = ltrim($dirURL2);
echo $dirURL."<br>";
echo $dirURL2."<br>";
echo $dirURL3;

?>
