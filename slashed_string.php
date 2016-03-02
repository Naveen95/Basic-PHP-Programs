<?php
$string1 = 'Here is the image link <img src = "image.jpg">';
$slashed_string = htmlentities(addslashes($string1));
echo $slashed_string.'<br />';
echo "Here is the string without slashes <br>";
echo $string1;
$slash_removed=stripslashes($slashed_string);
echo "Here is the string after removing the slashes <strong>".$slash_removed.'</strong>';




?>