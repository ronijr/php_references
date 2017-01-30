<?php
//The crc32 () fungsi menghitung CRC 32-bit (redundansi siklik checksum) untuk string>
//parameter crc32(string)
$str =crc32("Hello World");
printf("%u\n", $str)."<br>";


$str1 = crc32("Hello world!");
echo 'Without %u: '.$str1."<br>";
echo 'With %u: ';
printf("%u",$str1);

?>
