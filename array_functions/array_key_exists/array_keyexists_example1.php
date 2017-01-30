<?php

//array_key_exists adalah fungsi array untuk mengecek index dari suatu array apakah ada atau tidak
//syntax array_key_exists(key, array);

$a = array("Honda"=>"XC90","BMW"=>"X5");

if(array_key_exists("BMW",$a))
{
	echo "Key exists";
} else
{
	echo "Key does not exists !";
}
?>
