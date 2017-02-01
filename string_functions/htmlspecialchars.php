<?php
//fungsi string untuk mengkovert string dalam bentuk html original jika string
//tersebut terdapat tag html nya
//parameter htmlspecialchars(string,flags,charset,double_encode);
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>
