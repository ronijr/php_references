<?php
$str = addcslashes("Hello World!", "W");
echo $str."<br>";
echo "<hr>";
$str1 = "Welcome to my humble Homepage!";
echo $str1."<br>";
echo addcslashes($str1,"m")."<br>";
echo addcslashes($str1,"H")."<br>";
echo "<hr>";
$str2 = "Welcome to my humbel Homepage!";
echo $str2."<br>";
echo addcslashes($str2,"A..Z")."<br>";
echo addcslashes($str2,"a..z")."<br>";
echo addcslashes($str2,"a..g")."<br>";
?>
