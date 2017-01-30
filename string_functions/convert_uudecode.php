<?php
//convert_uuencode adalah function string untuk mengkonversi string ke bentuk yg tidak normal
//convert_uudecode sebaliknya dari fungsi convert_uuencode
///parameter convert_uuencode(string);
$str = ",2&5L;&\@=V]R;&0A `";
echo convert_uudecode($str)."<br>";

$str = "Hello wordl";
$endcode = convert_uuencode($str);
echo $endcode."<br>";

echo convert_uudecode($endcode)."<br>"
?>
