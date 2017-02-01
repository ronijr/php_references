<?php
$number = 9;
$str = "beijing";
$file = fopen("text.txt","r");
echo fprintf($file,"There are %u  in %s",$number,$str);
?>
