<?php
	$cars = array ("Toyota","Toyota","Avanza","Honda","Avanza","Honda","Honda");

	// array_count_values Menampilkan jumlah values yang sama dari suatu array 
	// Syntax array_count_values(array);
	// Parameter array adalah array itu sendiri
	$acv = array_count_values($cars);

	print_r($acv);
?>