<?php
if (isset($_GET['user_name']) && !empty($_GET['user_name']))  
{
	$user_name = $_GET['user_name'];
	$name = strtolower($user_name);


	if ($name =='hello')
	 {

		echo "Hi hello";
		# code...s
	}

	else
	{
		echo "hi ".$user_name;
	}
}
else
{
	echo "The field cannot be empty";
}



?>
<form action= "basic form with string function.php" method = "GET">
Enter your Name :<input type= 'text' name='user_name'>
<input type = 'button' value='submit'>
</form>
