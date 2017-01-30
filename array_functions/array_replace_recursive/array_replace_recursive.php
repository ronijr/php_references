<?php

// array_replace_recursive adalah fungsi array yang mengganti nilai array atau value array pada array1 dengan pengganti nya pada array2 , array3 dst secara recursive
// syntax array_replace_recursive(array1,array2);

$a1 = array("a"=>array("red"),"b"=>array("green","blue","black"));

$a2 = array("a"=>array("yellow"), "b"=>array("black","yellow"));
print_r(array_replace_recursive($a1, $a2));
?>