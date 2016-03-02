<?php
global $user_ip;
$user_ip = $_SERVER['REMOTE_ADDR'];
//echo 'the user Ip is :'.$user_ip;

function userip()
{
	global $user_ip;
	//echo "The user IP is : ".$user_ip;
	if($user_ip='::1')
{
	echo "You are on the local host<br>";
}
else
{
	echo "Code Properly my boy";
}
}
userip();
?>