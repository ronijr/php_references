<?php


//array_map adalah fungsi array yang berfungsi mengeksekui satu array atau lebih kedalam suatu fungsi
//syntax array_map("function",array1,array2);
//Parameter "function" bisa disi dengan function atau NULL jika NULL maka array digabungkan jika ada lebih dari satu array dengan index yang sama 
function myFunction ($v, $i)
{
	return ($v * $i);
}
$a= array("satu"=>1,"dua"=>2,3,4,5);
$a1= array(3,4,5,5);
print_r(array_map("myFunction",$a, $a1));
?>