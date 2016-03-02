<?php
$string = 'I am a budding PHP programmer';
if (preg_match('/am/', $string)) {
echo "Match Found";	# code...
}
else
{
	echo "No matches";
}
?>