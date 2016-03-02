<?php
$count = 1;

for ($count=1; $count<=10 ; $count+1) 
{
	# code...
	if ($count == 1) {
		echo $count.". This is the ".$count.'st hello <br>';
		# code...
	}
	elseif ($count == 2) {
		echo $count.". This is the ".$count.'nd hello <br>';
		# code...
	}
	elseif ($count == 3) {
		echo $count.". This is the ".$count.'rd hello <br>';
		# code...
	}
	else
	{
		echo $count.". This is the ".$count.'th hello <br>';
	}
 	$count++;
}

?>