<?php
$day = 'Monday' ;
$month = 'february' ;
$year = 2015;
function hello($day1 , $month1 , $year1)

{
	echo 'The date is '.$day1.' '.$month1. ' '.$year1;
}

echo "Calling the function here <br>";
hello($day , $month , $year);

?>