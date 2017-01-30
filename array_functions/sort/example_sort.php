<?php
//sort adalah function array untuk mengurutkan array
//parameter sort(array, sortstring);
// 0 = SORT_REGULER
// 1 = SORT_NUMERIC
// 2 = SORT_STRING
// 3 = SORT_LOCAL_STRING
// 4 = SORT_NATURAL
// 5 = SORT_FLAG_CASE
$arr = array("Roni","Jakarianto","Assep","Cecep","Esssa");
sort($arr,1);
print_r($arr);


 ?>
