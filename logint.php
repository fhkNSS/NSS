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
$e_id = $_POST["e_id"];
$password = $_POST["password"];


$sql = "SELECT e_id,password FROM s_personal where e_id='$e_id' AND password='$password'";


$result = $conn->query($sql);
if ($result->num_rows  == 1)
	echo "loged in";


else 
{
	$err = "Username or Password is invalid";
	#include("logint.html");
}

    
 


?>
