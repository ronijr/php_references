<?php
//fungsi string untuk menjadikan suatu string menjadi suatu bentuk array dengan separtor yang ditentukan atau tanda BadFunctionCallException
//parameter explode(separtor,string,limit);
$str = "Hello Wordl, It's a betiful day";
print_r(explode(" ",$str,5));
?>
