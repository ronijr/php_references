<?php

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","f"=>"gold");

$a2 = array("a"=>"orange","f"=>"green","g"=>"blue");
$a3 = array("a"=>"orange","f"=>"black","h"=>"yellow");

// array_diff adalah suatu array yang membandingkan dengan array yg lain dan menampilkan nilai array yg berbeda dengan yg lain

//syntax array_diff(array1,array2,array3,..);
//Parameter nya adalah array tidak boleh satu karna array akan dibandingkan dengan array yg lain dan mengambil nilai yg berbeda dengan array yang lain
$result = array_diff($a1,$a2,$a3);
print_r($result);
?>
