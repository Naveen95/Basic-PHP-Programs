<?php
$string = 'hello1264664g64sg43';
$string_shuffled=str_shuffle($string);
//echo $string_shuffled;
$string_half=substr($string,strlen($string/2));
echo $string_half."<br>";

$string1 = "Naveen";
$String_Reversed = strrev($string1);
echo "The reversed String is ".$String_Reversed;

?>