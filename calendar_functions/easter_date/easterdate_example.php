<?php
//easter_date adalah fungsi untuk mengembalikan fungsi timestamp unix untuk tengah malam pada paskah tahun tertentu
//syntax easter_date(years);
echo easter_date()."<br>";
echo date("M-d-Y", easter_date())."<br>";
echo date("M-d-Y", easter_date(2007))."<br>";
?>
