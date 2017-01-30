<?php
	
	$cars = array("Toyota","Avanza","Jazz","Honda","Suzuki","Yamaha","Odongan");

	$array_chunk = array_chunk($cars,3,FALSE);
	echo print_r($array_chunk);

	echo "<br/>";
	echo "<br/>";
	echo $array_chunk[1][1];

	$count=count($array_chunk);
	for($x=0; $x<$count; $x++)
	{

		echo "<br/>";
		echo $array_chunk[0][$x];
		echo "<br/>";
		echo count($array_chunk[$x]);
	}

?>