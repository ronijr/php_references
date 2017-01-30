<?php
//The convert_cyr_string () fungsi mengkonversi string dari satu Cyrillic karakter-set ke yang lain.
//paramter convert_cyr_string(string,from,to)
//The supported Cyrillic character-sets are:
// k - koi8-r
// w - windows-1251
// i - iso8859-5
// a - x-cp866
// d - x-cp866
// m - x-mac-cyrillic
$str = "Hello world! ���";
echo $str."<br>";
echo convert_cyr_string($str,'w','m')
?>
