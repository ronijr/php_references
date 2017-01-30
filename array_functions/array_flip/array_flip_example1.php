<?php 

$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");


//array_flip adalah fungsi array yang membalikan index menjadi value dan value menjadi index
//syntax array_flip(array);
 
$result = array_flip($a1);
print_r($result);
?> 