<?php
//chunk_split adalah function string yang memisahkan suatu string dengan tanda banya apapun
//parameter chunk_split(string,length,end)
$str = "Hello WOrld";
echo chunk_split($str,6,"/");

?>
