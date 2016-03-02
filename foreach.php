<?php
$mood = array('happy' => array('dance' ,'sing' , 'peace') , 'unhappy' =>array ('cry' , 'alone' ,'die')) ;

foreach ($mood as $element => $ielement) {
	echo '<strong>'.$element.'</strong><br>';
	foreach ($ielement as $state) {
		echo $state.'<br>';
		# code...
	}
	# code...
}
?>