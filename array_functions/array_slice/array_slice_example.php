<?php
  // syntax array_slice(array,start,length,preserve)
  $a = array("red","blue","yellow","green","black");
  print_r(array_slice($a,2)); // yang biasa
  echo "<br>";
  //parameter start menentukan awal dari suatu array yang akan dipotong
  //parameter length menentukan array setelah dipotong menampilakan sampe berapa baris
// parmeter preserve adalah kondisi TRUE atau FALSE default FALSE jika TRUE maka array yang dipotong index nya sesuai dengan array assalnya
  print_r(array_slice($a,2,2,TRUE));
?>
