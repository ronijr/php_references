<?php
function myFuntion ($v1, $v2)
{
	return $v1  +  $v2;
}

$a= array(1,2,3);

print_r(array_reduce($a,"myFuntion"));

?>