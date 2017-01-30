<?php
//syntax cal_from_jd(jd,calendar);
//cal_from_jd adalah fungsi mengkonversi hari julian hitung menjadi tanggal kalender tententu
$d = unixtojd(mktime(0,0,0,6,20,2007));
print_r(cal_from_jd($d,CAL_GREGORIAN));

?>
