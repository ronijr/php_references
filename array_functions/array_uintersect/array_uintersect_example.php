<?php
function myFunction($a1,$a2)
{
  if($a1 === $a2)
  {
    return 0;
  }

  return ($a1 > $a2) ? 1 : -1;
}
$a1 = array("a"=>"red","b"=>"green","c"=>"blue");
$a2 = array("a"=>"blue","b"=>"black","e"=>"blue");
$result = array_uintersect($a1,$a2,"myFunction");
print_r($result);
?>
