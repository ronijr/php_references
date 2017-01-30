<?php
$age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
foreach($age as $x=>$x_value)
{
  echo "Key = $x and value = $x_value";
  echo "<br>";
}
?>
