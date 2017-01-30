<?php

$a = array("red","blue","yellow","black","green");

$result = array_rand($a,3);
echo $a[$result[0]];
echo $a[$result[1]];
echo $a[$result[2]];
?>