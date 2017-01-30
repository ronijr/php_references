<?php

$a1 = array("a"=>"red","b"=>"blue","c"=>"green","d"=>"yellow");
$a2 = array("a"=>"red","b"=>"blue","d"=>"yellow");

$result = array_intersect_assoc($a1,$a2);

print_r($result);

?>