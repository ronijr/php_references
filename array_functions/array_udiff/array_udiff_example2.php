<?php
function myFunction($a1,$a2)
{
  if($a1 === $a2)
  {
    return 0;
  }

  return ($a1>$a2) ? 1 : -1;
}
$a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2 = array("A"=>"red","b"=>"GREEN","yellow","black");
$a3 = array("a"=>"green","b"=>"red","yellow","black");
$result = array_udiff($a1,$a2,$a3,"myFunction");
print_r($result);

?>
