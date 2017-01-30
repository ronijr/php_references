<?php
function test_odd($var)
{
	if($var == "a" or $var == 3)
	{
		return FALSE;
	} else
	{
		return TRUE;
	}
}

// array_filter adalah fungsi array yang memfilter suatur array berdasarkan callbackfuction yang diatur
// syntax array_filter(array, callbackfunction);
// parameter array adalah array nya
// callback function adalah function yang diatur

$a1 = array("a","b",2,3,4);
print_r(array_filter($a1,"test_odd));
?>
