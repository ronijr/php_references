<?php

// A two-demensional array;
$cars = array (

		array("Toyota",100,96),
		array("Honda",60,59),
		array("BMW",75,70)

	);


$jumlah_array = count($cars);
for($x=0; $x<$jumlah_array; $x++)
{

	echo $cars[$x][0]." Order= ".$cars[$x][1]." sold= ".$cars[$x][2];
	echo "<br>";
	// for($i=0; $x<$dalam_array; $i++)
	// {
	// 	echo $cars[$x][$i];
	// 	echo "<br/>";
	// }
}
?>