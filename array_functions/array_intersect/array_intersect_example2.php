<?php

$a1= array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 =array("e"=>"red","f"=>"black","g"=>"yellow");
$a3 =array("a"=>"red","b"=>"black","h"=>"yellow");

$result= array_intersect($a1,$a2,$a3);
print_r($result);
?>