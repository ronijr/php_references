<?php
//sizeof adalah function array untuk mengitung jumlah dari arrray
//parameter sizeof(array, mdoe)
//default mode 0 dan 1 untuk menghitung multidemensi array
$arr = array(

  "Volovo" => array(
    "XC60",
    "XC90"
  ),

  "BMW" => array(
    "X3",
    "X4"
  ),

  "Toyota" => array(
    "Higlender",
    "Yaris"
  ),
);

echo "Normal count :".sizeof($arr)."<br>";
echo "Recrusif count:".sizeof($arr,1)."<br>";
?>
