<?php
//date_date_set adalah function set tanggal
//parameter date_date_set(object,year,month,day);
$object = date_create();
$date_set = date_date_set($object,2017,01,31);
echo date_format($date_set,"Y/m/d");
?>
