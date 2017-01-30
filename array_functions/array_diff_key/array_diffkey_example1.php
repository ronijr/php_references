<?php 

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"green","b"=>"green","c"=>"blue");

// array_diff_key adalah fungsi array yang membandingkan index array1 dengan array2,array3,.. dan mengambil index yang berbeda 
//Syntax array_diff_key(array1,array2,array3);
//Parameter array1,array2,array3 adalah array untuk perbandingan nya dengan inti array1 dan yang lainnya untuk perbandingan
$example1 = array_diff_key($a1,$a2);
print_r($example1);


?>