<?php
$number1 = 100 ;
$number2 = 200 ;
$number1 += 100;
$number2 += 200;
$text1 = "hello";
$text1 .= " world <br />";
echo "$text1 -  This is from the string Concatenations <br / >"; 
echo "<strong>Assignment operator</strong><br />";
echo "$number1 <br / >";
echo "$number2<br />";
$number3 = $number1+$number2;
?>
<strong>Total</strong><input type = "text" name="add" value = "<?php echo"$number3" ?>">