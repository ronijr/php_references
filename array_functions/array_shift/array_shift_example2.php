<?php
//array shift adalah array yang menghapus nilai pertama dari suatu array dan jika array tersebut tidak ada index nya maka array setelah nya index nya akan otomatis dimulai dari 0 lagi
$a= array("red","blue","yellow");
echo array_shift($a);
print_r($a);
?>
