<?php
//htmlentites adalah fungsi string untuk memformat string dalam bentuk original html
//htmlentites(string,flags,charset,double_encode)
$str ='<a href="http://localhost/phpmyadmin">Welcome</a>';
echo htmlentities($str)."<br>";
echo $str;
?>
