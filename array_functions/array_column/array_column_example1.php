<?php


	$a = array (


			array(

					'id' => 1,
					'firts_name' => 'Roni',
					'last_name' => 'Jakarianto'
				),

			array(
					'id' => 2,
					'firts_name' => 'Cecep',
					'last_name'	=> "Aprtilianto"
				),

			array(
					'id'=>3,
					'firts_name' => 'Asep',
					'last_name'	=> 'Irman'
				)
		);


	// 	Menampilkan array dengan value nya masing"
	// 	harus multidemintion array
	// 	syntax array_column(array, column_key, index_key);
	//	Parameter array adalaha array multidemention
	//	Parameter column_key adalah target column yang akan ditampilkan
	//	Parameter index_key adalah initialisasi index array dengan memilih column

	$example1 = array_column($a, 'firts_name');
	$example2 = array_column($a, 'id','firts_name');
	echo "<pre>";
	print_r($example1);

 	echo "<br/>";
 	print_r($example2);
?>
