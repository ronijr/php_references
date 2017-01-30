<?php
$people = array("Peter","Joe","Glenn","Cleveland");

echo current($people). "<br>"; //The current element is Peter
echo next($people). "<br>"; // The next element of peter is joe
echo current($people). "<br>"; // Noe The current element is Joe
echo prev($people). "<br>"; // Thr prebios element of joe is peter
echo end($people). "<br>"; // The last element Cleveland
echo prev($people). "<br>"; // The previos element of cleveland is glenn
echo current($people). "<br>"; // Now the current element is gleen
echo reset($people). "<br>";
echo next($people). "<br>";
print_r(each($people));
?>
