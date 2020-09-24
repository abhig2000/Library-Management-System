<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="lms";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "database connected Successfully";
}
else
{
	#echo "Connection failed";
	die("connection failed".mysqli_connect_error());
}

?>