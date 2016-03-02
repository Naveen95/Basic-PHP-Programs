<?php
$name = 'naveen';
$number = 1;

echo "<strong>the below output is output from the php file</strong>";
echo "<br />\n";   //Used to create the new line 
echo $name ;
echo "<br />\n";
echo $number;
echo "<br />\n";
?>

<strong>The below output are fetched through html from php variables </strong>
<?php
echo "<br />\n";
?>
<input type = 'text' name='name' value='<?php echo $name; ?>'>
<?php
echo "<br />\n";
?>
<input type = 'text' name='name' value='<?php echo $number; ?>'>

