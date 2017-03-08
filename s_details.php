<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$db="mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$conn->set_charset("utf8");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

$f_name=$_POST['f_name'];
$m_name=$_POST['m_name'];
$l_name=$_POST['l_name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$photo=$_POST['photo'];
$nationality=$POST['nationality'];
$country=$POST['country'];
$id_no=$POST['id_no'];
$contact_no=$POST['contact_no'];
$e_id=$POST['e_id'];
$city =$POST['city'];
$province=$POST['province'];
$g_name=$POST['g_name'];
$g_contact=$POST['g_contact'];
$s_contact=$POST['s_contact'];
$f_aid=$POST['f_aid'];



}
$stmt = $conn->prepare("INSERT INTO s_details (f_name,m_name,l_name,dob,gender,photo,nationality,country,id_no,contact_no,e_id,city,province,g_name,g_contact,s_contact,f_aid)
 VALUES ( ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$stmt->bind_param('sssssss',$f_name,$m_name,$l_name,$dob,$gender,$photo,$nationality,$country,$id_no,$contact_no,$e_id,$city,$province,$g_name,$g_contact,$s_contact_no,$f_aid);

$stmt->execute();

$sql="SELECT * FROM s_details WHERE name='$name'";
$result=$conn->query($sql);
if ($result->num_rows == 1) 
{
	header("Location: homet.html");}
else

	echo $result->num_rows ; 
?>