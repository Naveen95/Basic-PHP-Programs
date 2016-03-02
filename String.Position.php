<?php
$string = 'I am a very good boy with very decent english very knowledge                           very ';
$to_find = "very";
$length = strlen($to_find);
//echo strpos($string,$to_find);

  while ($str_pos = strpos($string,$to_find,$offset)) {

  	echo "The string ".$to_find.' is found at '.$str_pos.'<br>';
  	$offset = $str_pos + $length ;
  }
?>
