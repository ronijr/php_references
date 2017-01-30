<?php
//The date_add() function adds some days, months, years, hours, minutes, and seconds to a date.
//syntax date_add(object,interval);

$date = date_create("2016-11-2");
date_add($date,date_interval_create_from_date_string("24 month"));
echo date_format($date,"Y-m-d");
?>
