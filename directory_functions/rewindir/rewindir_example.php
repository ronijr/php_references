<?php
$dir= "../rewindir";

if(is_dir($dir)){
   if($dh=opendir($dir)){
     while(($file = readdir($dh)) !== false ){

       echo "filename : ".$file."<br>";
       echo "open dir : ".$dh."<br>";
       
     }

     rewinddir();


     while(($file = readdir($dh)) !== false)
     echo "filename : ".$file."<br>";
   }
   closedir($dh);
}
?>
