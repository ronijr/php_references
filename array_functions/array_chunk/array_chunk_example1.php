<?php
	$cars = array("Toyota","Suzuki","Honda","BMW","Volvo","Mercedess","Opel");

	//array_chunk(array,size,preserve_key)

	//array
	//size jumlah array yang akan dibagi dan otomotis menjadi array
	//preserve_key adalah mendefininisikan true atau false jika False maka index array yg akan dibagi mengulang kembali urutan jika true index array yang dibagi menjadi berurutan
	echo "<pre>";
	print_r(array_chunk($cars,3,TRUE));
	echo "<br/>";
	print_r(array_chunk($cars,3,FALSE));
?>
