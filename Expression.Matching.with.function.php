<?php
$string = 'IamabuddingPHPprogrammer';

function checker($string)
{
	if(preg_match('/ /', $string))
	{
		return true;
	}
	else {
		return false;
	}
}

	if(checker($string))
	{
		echo "Has a space";
	}
	else
	{
		echo "No space";
	}

	strpos($string, 'am')
	

?>