<?php

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"red","f"=>"green","g"=>"blue");
$a3 = array("h"=>"red","b"=>"green","g"=>"blue");

// array_diff_assoc adalaha fungsi array yang membandingan 2 buah array atau lebih yang mengambil index dan value yang berbeda dari array1 adalah array pada parameter pertama, jika index dan value sama maka tidak akan ditampilkan
//Syntax array_diff_assoc(array1,array2,array3,..);
//parameter array1,array2 atau array3 adalah array yang dimasukan untuk dibandingkan dengan array1
$result = array_diff_assoc($a1,$a2);
$example2 = array_diff_assoc($a1,$a2,$a3);

print_r($result);
echo "<br/>";
print_r($example2);
?>