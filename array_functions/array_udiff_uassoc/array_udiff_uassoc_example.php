<?php
function myFunction_keys($a1, $a2)
{
  if($a1 === $a2)
  {
    return 0;
  }

  return ($a1 > $a2) ? 1 : -1;
}

function myFunction_value($a1,$a2)
{
  if($a1 === $a2)
  {
    return 0;
  }

  return ($a1 > $a2) ? 1 : -1;
}
$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
$a2 = array("a"=>"red","b"=>"green","c"=>"green");
$result = array_udiff_uassoc($a1,$a2,"myFunction_keys","myFunction_value");
print_r($result);
?>
