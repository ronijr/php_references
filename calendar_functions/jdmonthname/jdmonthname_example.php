<?php
//syntax jdmonthname(jd,mode);
// mode	Optional. Specifies which calendar to convert the Julian Day Count to, and how the month name is to be returned. Mode values:
// 0 - Gregorian - abbreviated form (Jan, Feb, Mar, etc.)
// 1 - Gregorian (January, February, March, etc.)
// 2 - Julian - abbreviated form (Jan, Feb, Mar, etc.)
// 3 - Julian (January, February, March, etc.)
// 4 - Jewish (Tishri, Heshvan, Kislev, etc.)
// 5 - French Republican (Vendemiaire, Brumaire, Frimaire, etc.)
$d = gregoriantojd(1,13,1998);
echo jdmonthname($d,0);
?>
