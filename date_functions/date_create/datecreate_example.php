<?php
//date_create adalah function buat tanggal dengan timezone yang ditentukan
$data_create= date_create("2013-05-15 23:40:00", timezone_open("Europe/Oslo"));
echo date_format($data_create, "M/Y/d H:iP");
?>
