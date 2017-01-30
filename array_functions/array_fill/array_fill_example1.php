<?php

//array_fill adalah fungsi array yang berguna untuk membuat suatu array
//syntax array_fill(start_index,number,value);
// Parameter start_index adalah intiger yaitu index yang akan dibuat dan urutan pertama selanjutnya berurutan indexnya
// Parameter number adalah jumlah array yang akan dibuat
// Parameter value adalah nilai value nya dari array yang dibuat dan nilai nya sama
$a1 = array_fill(0,4,"blue");
print_r($a1);
?>