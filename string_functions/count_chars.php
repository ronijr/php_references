<?php
//The count_chars () mengembalikan fungsi informasi tentang karakter yang digunakan dalam sebuah string
//(misalnya, berapa kali karakter ASCII terjadi di string, atau yang karakter yang telah digunakan atau tidak
// digunakan dalam string).
//parameter count_chars(string,mode);
// mode	Optional. Specifies the return modes. 0 is default. The different return modes are:
// 0 - an array with the ASCII value as key and number of occurrences as value
// 1 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences greater than zero
// 2 - an array with the ASCII value as key and number of occurrences as value, only lists occurrences equal to zero are listed
// 3 - a string with all the different characters used
// 4 - a string with all the unused characters
$str = "Hello Wordl";
echo count_chars($str,'4')."<br>";
print_r(count_chars($str,'1'))."<br>";

$str1 = "PHP is prety fun!!";
$strArray = count_chars($str,'1');

foreach ($strArray as $key => $value) {
  echo "Ini karakte <b>".chr($key)." was found $value ".time()."<br>";
}
?>
