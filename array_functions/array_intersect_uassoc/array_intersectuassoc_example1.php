<?php
function myFunction($a, $b)
{
	if($a === $b)
	{
		return 0;
	}

	return ($a>$b) ? 1 : -1;
}

$a1 = array ("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2= array("a"=>"red","h"=>"green","c"=>"blue","d"=>"yellow");

$result = array_intersect_uassoc($a1, $a2, "myFunction");

print_r($result);

?>