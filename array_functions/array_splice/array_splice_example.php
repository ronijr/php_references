<?php
  $a1 = array("a"=>"red","b"=>"blue","c"=>"green","d"=>"yellow");
  $a2 = array("a"=>"purple","b"=>"orange");
  array_splice($a1,0,2,$a2);
  print_r($a1);
?>
