<?php

// array_reverse adalah fungsi array yang befungsi untuk untuk membalikan index bersama value nya dari suatu array dengan pilihan TRUE atau FALSE default nya FALSE jika TRUE maka index akan diurut sesuai index yang ada tetapi jika FALSE maka index akan mengulang kembali dari 0;
//syntax array_reverse(array,preverse);

$a= array("Volvo","BMW","Toyota");
$a1 = array("Volovo","XC90",array("BMW","Toyota"));
$example1 = array_reverse($a,false);
$reverse= array_reverse($a1);
$prevserse = array_reverse($a1, FALSE);
print_r($example1);
echo "<br/>";
print_r($a1);
echo "<br/>";
print_r($reverse);
echo "<br/>";
print_r($prevserse);
echo "<br/>";

?>
