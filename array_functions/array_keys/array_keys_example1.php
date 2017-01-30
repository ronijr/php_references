<?php

// array_keys adalah fungsi array yang mengambil index nya dan jadikan value apabila ada value yang sama tapi berbeda tipe data misalkan interger 10 dan string "10" jika ingin ditampilkan string saja maka TRUE jika ada beberapa value yang sama maka FALSE
//syntax array_keys(array, value, strict);
//parameter strict adalah sebagai isi TRUE atau FALSE
$a = array("Honda"=>"01","BMW"=>"02","SUZUKI"=>"03","Ford"=>"04");
$a1 = array(10,20,30,"10");
print_r(array_keys($a1,"10",true);

?>
