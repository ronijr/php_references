<?php
$age = array("Peter"=>35,"Ben"=>37,"Joe"=>43);
asort($age);

foreach($age as $x=>$x_value)
{
  echo "Keys = $x and Values = $x_value";
  echo "<br/>";
}
?>
