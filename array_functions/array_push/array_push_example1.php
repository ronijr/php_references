<?php

//array_push adalah fungsi array yang berfungsi untuk menambakan value kedalam arraynya dengan index tidak diatur alias index seperti biasa mulai dari 0 apabila array yang di push memliki index tetap dimulai dengan 0 apabila mendatkan value
//syntax array_push(array, value,value);

$a = array("a"=>"red","b"=>"green");
array_push($a,"blue","yellow");
print_r($a);
?>
