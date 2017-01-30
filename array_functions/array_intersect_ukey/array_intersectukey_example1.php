<?php
 
 function myFunction ($a,$b)
 {
 	if($a === $b)
 	{
 		return 0;
 	}

 	return ($a>$b) ? 1 : -1;
 }

 $a1 = array ("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 $a2 = array ("a"=>"purple","c"=>"black","d"=>"white");

 $result = array_intersect_ukey($a1, $a2, "myFunction");
print_r($result);

?>