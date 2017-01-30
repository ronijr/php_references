<?php

$keys = array ("a","b","c","d");

//array_fill_keys adalah suatu fungsi array yang membuat suatu array dengan index yang telah diatur sebagai array dan value sama
//syntax array_fill_keys(keys, value);
//parameter keys adalah array yang menjadi index
//parameter value adalah nilai yang akan disikan dan sama semua
$a1 = array_fill_keys($keys,"blue");

print_r($a1);
?>