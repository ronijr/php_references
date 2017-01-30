<?php

//syntax array_walk_recursive(array,function,parameter)
function myFunction($values,$keys,$p)
{
  echo "The key $keys has the value $values $p<br>";
}
$a1 = array("a"=>"red","b"=>"green");
$a2 = array($a1,"1"=>"blue","2"=>"yellow");
array_walk_recursive($a2,"myFunction","Ini array recursive");
?>
