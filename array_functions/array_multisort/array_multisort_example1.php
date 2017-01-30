<?php

//array_multisort adalah fungsi array berfungsi untuk mengurtkan satu array atau lebih sesuai value dengan desc atau asc 
//syntax array_multisort(array1,sort int order, sorting type, array2,array3,..);

$a = array("Dog","Cat","Horse","Bear","Zebra");
$a1 = array(1,2,3,4,5);
array_multisort($a,SORT_ASC,$a1,SORT_DESC);
print_r($a);
echo "<br/>";
print_r($a1);
?>