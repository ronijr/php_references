<?php
//syntax cal_to_jd(calendar,month,days,years);
//cal_to_jd adalah fungsi mengkonversi tanggl dalam kalendar tertentu untuk menjumlahkan julian days
$d = cal_to_jd(CAL_GREGORIAN,11,29,2016);
echo $d;
?>
