<?php
$dir = dir(getcwd());
echo "Handle".$dir->handle."<br>";
echo "Path" .$dir->path."<br>";
while(($file = $dir->read()) !== false){
  echo "filename : ".$file."<br>";
}
$dir->close();
?>
