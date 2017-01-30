<?php


//array_merge_recursive adalah fungsi array yang menggambungkan dua buah array atau lebih menjadi suatu kesatuan
//syntax array_merge_recursive(array1,array2,array3);
//note : jika suatu index nya sama maka akan menjadi saatu kesatuan dan index menjadi 0 dan seterusnya
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1, $a2));
?>