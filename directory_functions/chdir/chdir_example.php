<?php

//chdir adalah function directory untuk melihat folder berada dimana
//paramter chdir(directory);

//Get current Directory
echo getcwd()."<br>";

//Change Directory
chdir("../chdir");

echo getcwd();
?>
