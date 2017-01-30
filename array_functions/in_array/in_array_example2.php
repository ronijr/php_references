<?php

$nama = array("Roni","Jakarianto","Asep","Cecep","Essa",23);

if(in_array("23", $nama, TRUE))
{
    echo "Match Found<br/>";
} else {
  echo "Match Not Found<br/>";
}

if(in_array("Roni", $nama, TRUE))
{
  echo "Match Found <br>";
} else {
  echo "Match Not Found<br>";
}

if(in_array(23, $nama, TRUE))
{
  echo "Match Found<br>";
} else {
  echo "Match Not Found<br>";
}
?>
