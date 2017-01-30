<?php

$fname = array("Roni","Cecep","Asep");
$age = array("22","23","24");


//Array combine adalah suatu fungsi array yang mengokombinasikan 2 buah array menjadi satu array

//Syntax array_combine(keys, values);
//Parameter keys adalah suatu array yang nanti nya akan menjadi index array
//Parameter values adalah suatu array yang nanti nya akan menjadi values array

$combine = array_combine($fname,$age);
print_r($combine);

?>