<?php
//syntax jddayofweek(jd,mode)
// mode	Optional. Specifies how to return the weekday. Can have one of the following values:
// 0 - Default. Returns the weekday as an integer (0=Sunday, 1=Monday, etc.)
// 1 - Returns the weekday as a string (Sunday, Monday, etc.)
// 2 - Returns the weekday as a string, abbreviated form (Sun, Mon, etc.)
$d = gregoriantojd(1,13,1998);
echo jddayofweek($d,2);
?>
