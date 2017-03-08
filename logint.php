<?php 
session_start();
$servername = "localhost";
$username = "root";
$pass = "root";
$db="mydb";

// Create connection
$conn = new mysqli($servername,$username,$pass,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
$uname = $_POST["u"];
$password = $_POST["p"];


$sql = "SELECT name,password FROM teacher where name='$uname' AND password='$password'";


$result = $conn->query($sql);
if ($result->num_rows  == 1) {
	$_SESSION["u"]=$uname;
	header("location: homet.html");
} 

else 
{
	$err = "Username or Password is invalid";
	#include("logint.html");
}

    
 


?>
