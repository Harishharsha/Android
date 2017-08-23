<?php

$con=mysqli_connect("localhost","root","12345","sample")or die("Error in connection");

$user=$_POST["name"];
$password=$_POST["pwd"];
//$date=$_POST['date'];

$sql="insert into sample values('$user','$password');";
if(mysqli_query($con,$sql))
{
		echo "success";
}
else{
	echo "fail";
	}

?>
