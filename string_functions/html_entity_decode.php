<?php
//html_entity_decode(string,flags,charset-set);
$str= '&lt;a href=&quot;http://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str);
?>
