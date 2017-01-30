<?php

//syntax array_walk(array,function,parameter_optional);

function myFunction($values, $keys)
{
  echo "The key $keys has the value $values<br>";
}
$a = array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myFunction");
?>
