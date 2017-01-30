<?php

$age = array("Roni"=>"23","Cecep"=>"24","Asep"=>"25");

//Menampilkan index  dan value array dengan huruf kecil(CASE_LOWER) dan huru besar (CASE_UPPER)
print_r(array_change_key_case($age,CASE_UPPER));

?>
