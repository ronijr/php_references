<?php
$dir = "../closedir";

// open a directory, and read its content
if(is_dir($dir)){
  if($dh = opendir($dir)){
    while(($file = readdir($dh)) !== false){
      echo "filename ".$file."<br>";
    }
    closedir($dh);
  }
}
?>
