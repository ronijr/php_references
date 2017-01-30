<?php
//syntax arsort(array,sortingtype)
$a = array("Peter"=>37,"Joe"=>32,"Doe"=>43);
arsort($a);
foreach($a as $x=>$x_value)
{
  echo "Keys = $x and values = $x_value";
  echo "<br>";
}


?>
