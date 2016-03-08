<?php
if((isset($_GET['name']) && isset($_GET['id']) && isset($_GET['ph_no'])) &&  !empty($_GET['name']) && !empty($_GET['id']) && !empty($_GET['ph_no']))
{

$username = $_GET['name'];
$userid = $_GET['id'];
$ph_no = $_GET['ph_no'];
}
else
{
	die('Fields are empty');

}

$host_name = 'localhost';
$user = 'root';
$password = '';
$database = 'test';

$connection = mysqli_connect($host_name,$user,$password,$database);
if ($connection) {
	echo "Connected to the DB";
	# code...
}
else
{
	echo "Not Connected";
}

if(($userid !== NULL) && ($username  !== NULL) && ($ph_no  !== NULL))
{

$sql = "INSERT INTO `employee` (employee_id , Name , PH_NO) VALUES ('$userid' , '$username' , '$ph_no')";
if (mysqli_query($connection,$sql))
 {
	# code...
	echo "Values added to the table";
}
}

else
{
	echo "values not added".mysqli_error($connection);
}

?>

<form action="Form with DB.php" method="GET">
Enter Employee Name : <input type = "text" name = "name"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Enter Employee ID : <input type = "text" name = "id"><br>
Enter Phone No : <input type = "text" name = "ph_no"><br>
<input type = "submit" name="submit" value="Submit">
</form>
