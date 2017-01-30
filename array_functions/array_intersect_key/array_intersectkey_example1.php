<?php

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("a"=>"purple","b"=>"orange","c"=>"blue","d"=>"black");


//array_intersect_key adalah fungsi array untuk membandingkan array1 dengan array2,atau array3 dan seterusnya jika index pada array1 sama dengan array2 atau array3 maka index tersebut dipilih dan ditampilkan
//syntax array_intersect_key(array1,array2);
$result  = array_intersect_key($a1,$a2);
print_r($result);

?>